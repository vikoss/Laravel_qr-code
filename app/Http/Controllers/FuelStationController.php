<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelsFuelStation\Vehicle;
use App\ModelsFuelStation\Refill;
use App\ModelsFuelStation\Dependency;
use App\Http\Requests\RefillRequest;
use Barryvdh\DomPDF\Facade as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Response;
use Carbon\Carbon;

class FuelStationController extends Controller
{
    public function prueba()
    {

        return "Hello from stattion routes...";
    }

    public function getVehicle($uuid)
    {
        $vehicle = Vehicle::whereUuid($uuid)->with('lastRefill')->firstOrFail();

        return $vehicle;
    }

    public function saveRefill(RefillRequest $refill)
    {
        // Consultar primero el modelo vehicle vehicle->refill->create();
        Refill::create($refill->validated());
        
        return Response::json(['success' => true], 200);;
    }

    public function getBitacora(Request $request)
    {
        $validatedData = $request->validate([
            'uuid'          => 'required',
            'start_date'    => 'required',
            'end_date'      => 'required',
        ]);

        // Obtienes el vehiculo, la dependencia y las recargas que se tiene
        
        $between = Vehicle::whereUuid($validatedData['uuid'])->with(['dependency', 'refills' => function ($query) use ($validatedData) {
            return $query->whereBetween('created_at',[$validatedData['start_date'],$validatedData['end_date']]);
        }])->first()->toArray();

        // Se concatena las fechas que se necesitaran en el PDF
        $between['dates'] = $validatedData;


        //return Response::json($between, 200);
        // Cargas la vista blade con la data y la codificas

        $pdf = PDF::loadView('PDF.fuelStation.bitacora', $between)->setPaper('a4', 'landscape')->download('archivo.pdf');

        return ['pdf' => base64_encode($pdf)];
    }

    public function getReport(Request $request)
    {
        $data = Dependency::whereName($request->dependency)->with(['vehicle.refills' => function ($query) use ($request) {
            return $query->whereBetween('created_at',[$request->start_date, $request->end_date])->update(['invoice'=>$request->invoice]);
        }])->get();

        $dataPDF = [
            'dependencies' => $data,
            'startDate' => $request->start_date,
            'endDate' => $request->end_date,
            'invoice' => $request->invoice
        ];

        $pdf = PDF::loadView('PDF.fuelStation.report', $dataPDF)->download('reporte.pdf');

        return ['pdf' => base64_encode($pdf)];
    }

    public function getAllDependencies()
    {
        return Dependency::select('id', 'name', 'section')->get();
    }

    public function getDependencies()
    {
        return Dependency::select('name')->distinct()->get();
    }

    public function getVehicles()
    {
        return Vehicle::select('uuid', 'vehicle')->get();
    }

    public function getQrOfVehicles()
    {
        $vehicles = Vehicle::select('uuid', 'vehicle')->get();
        
        foreach ($vehicles as $key => $vehicle) {
            $vehicle->qr = base64_encode( QrCode::format('png')->size(200)->generate( $vehicle->uuid ) );
        }

        $pdf = PDF::loadView('PDF.fuelStation.qrCodes', ['vehicles' => $vehicles])->download('qrCodes.pdf');
        
        return ['pdf' => base64_encode($pdf)];
    }
}
