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
        return view('index', [ 'taxes' => Tax::paginate() ]);
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
            $tax->CERTIFICACION = 'Aportacion a mejoras';
        }
        

        return view('details', [ 'tax' => $tax ]);
    }

    public function pdf($uuid, $type)
    {
        $qrCode = QrCode::format('png')->size(150)->generate("https://certificacion-qr.ml/show/{$uuid}/{$type}");

        $tax = Tax::where('uuid', $uuid)->firstOrFail();

        $stringCode = "{$type}{$tax->EXP}|{$tax->CLAVE_CAT}|{$tax->FECHA_EMISION}|{$uuid}".base64_encode($tax->NOMBRE);
      
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

        //$this->pdf($);
           
        return back();
    }

    public function pdfview() 
    {      
        return view('pdfview');
    }
}
