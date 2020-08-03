<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Imports\TaxesImport;
use App\Tax;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('index', [ 'taxes' => Tax::orderBy('CAST("EXP" AS INTEGER) ASC')->paginate() ]);
    }

    public function gelAll()
    {
        return [ 'taxes' => Tax::orderBy('CAST("EXP" AS INTEGER) ASC')->get() ];
    }
    
    public function show($uuid, $type)
    {
        $tax = Tax::where('uuid', $uuid)->firstOrFail();

        if ($type == 'CV') {
            $tax->FOLIO = $tax->CLAVE_Y_VALOR_CATASTRAL;
            $tax->CERTIFICACION = 'Clave y Valor Catastral';
        }
        if ($type == 'PP') {
            $tax->FOLIO = $tax->NO_ADEUDO_PREDIAL;
            $tax->CERTIFICACION = 'Pago Predial';
        }
        if ($type == 'AM') {
            $tax->FOLIO = $tax->APORTACIONES_MEJORAS;
            $tax->CERTIFICACION = 'Aportaciones a mejoras';
        }
        

        return view('details', [ 'tax' => $tax ]);
    }

    public function pdf($uuid, $type)
    {
        $qrCode = QrCode::format('png')->size(150)->generate( url("/ver/{$uuid}/{$type}") );

        $tax = Tax::where('uuid', $uuid)->firstOrFail();

        $numberTax = 0;
        
        if ($type == 'CV') {
            $numberTax = $tax->CLAVE_Y_VALOR_CATASTRAL;
        }
        if ($type == 'PP') {
            $numberTax = $tax->NO_ADEUDO_PREDIAL;
        }
        if ($type == 'AM') {
            $numberTax = $tax->APORTACIONES_MEJORAS;
        }
        

        $stringCode = "{$type}{$numberTax}|{$tax->CLAVE_CAT}|{$tax->FECHA_EMISION}|{$uuid}".base64_encode($tax->NOMBRE);
      
        $pdf = PDF::loadView('pdf', ['qrCode' => $qrCode, 'stringCode' => $stringCode ]);
     
        return $pdf->stream('archivo.pdf');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        
        Excel::import(new TaxesImport,request()->file('file'));

           
        return redirect()->route('importView')->with([ 'uploaded' => true ]);
    }

    public function pdfview() 
    {      
        return view('pdfview');
    }

    public function delete(Tax $tax)
    {
        $tax->delete();

        return redirect()->route('index');
    }
}
