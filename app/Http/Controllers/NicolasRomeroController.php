<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Imports\TaxesImport;
use App\Http\Requests\ViewPDFRequest;
use Response;
use App\ModelsNicolasRomero\Tax;

class NicolasRomeroController extends Controller
{

    public function getList()
    {
        return Tax::orderBy('id', 'desc')->paginate(10);
    }

    public function gelAll()
    {
        return [ 'taxes' => Tax::orderByRaw('CAST("EXP" AS INTEGER) ASC')->get() ];
    }
    
    public function getDetails($uuid, $type)
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
        
        return $tax;
    }

    public function viewPDF(ViewPDFRequest $request)
    {
        $qrCode = QrCode::format('png')->size(150)->generate( url("/ver/{$request->uuid}/{$request->type}") );

        $tax = Tax::where('uuid', $request->uuid)->firstOrFail();

        $numberTax = 0;
        
        if ($request->type == 'CV') {
            $numberTax = $tax->CLAVE_Y_VALOR_CATASTRAL;
        }
        if ($request->type == 'PP') {
            $numberTax = $tax->NO_ADEUDO_PREDIAL;
        }
        if ($request->type == 'AM') {
            $numberTax = $tax->APORTACIONES_MEJORAS;
        }
        

        $stringCode = "{$request->type}{$numberTax}|{$tax->CLAVE_CAT}|{$tax->FECHA_EMISION}|{$request->uuid}".base64_encode($tax->NOMBRE);
      
        $pdf = PDF::loadView('PDF.nicolasRomero.qrCode', ['qrCode' => $qrCode, 'stringCode' => $stringCode ])->download('archivo.pdf');

        return ['pdf' => base64_encode($pdf)];
    }

    public function importExcel() 
    {
        try {
            Excel::import(new TaxesImport,request()->file('file'));
        } catch (\Exception $error) {
            return Response::json(['error' => $error], 500);
        }

        return Response::json(['success' => true], 200);
    }

    public function delete($uuid)
    {
        Tax::where('uuid',$uuid)->delete();

        return Response::json(['success' => true], 200);
    }
}
