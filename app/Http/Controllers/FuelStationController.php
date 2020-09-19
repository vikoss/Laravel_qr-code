<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelsFuelStation\Vehicle;
use App\ModelsFuelStation\Refill;
use App\ModelsFuelStation\Dependency;
use App\Http\Requests\RefillRequest;
use Barryvdh\DomPDF\Facade as PDF;
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
            'dependency_id' => 'required'
        ]);
        
        $between = Vehicle::whereUuid($validatedData['uuid'])->whereDependencyId($validatedData['dependency_id'])->with(['dependency', 'refills' => function ($query) use ($validatedData) {
            return $query->whereBetween('created_at',[$validatedData['start_date'],$validatedData['end_date']]);
        }])->firstOrFail()->toArray();


        $lastOfSubday = Refill::whereVehicleUuid($validatedData['uuid'])->whereDate('created_at',Carbon::create($validatedData['start_date'])->subDay())->latest()->firstOrFail();

        $between['lastrefill'][] = $lastOfSubday;
        $between['dates'] = $validatedData;


        return Response::json($between, 200);

        $pdf = PDF::loadView('PDF.bitacora', $between)->setPaper('a4', 'landscape')->download('archivo.pdf');

        return ['pdf' => base64_encode($pdf)];
    }

    public function getDependencies()
    {
        return Dependency::select('id', 'name', 'section')->get();
    }
}
