<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
        Array de arrays de 8 posiciones 
        vehicle     plates      serie   brand     color    model    inventory     observations
        */
        $vehicles = [
            ['OP-TSURU BLANCO', 'S/P', 'SDF34S56', 'NISSAN', 'BCO/NGO', '2007', 'NIC-098-124', 'No funciona odometro'],
            ['OP-704', 'S/P', 'JKL898SDB', 'NISSAN', 'BCO/NGO', '2007', 'NIC-098-124', 'No funcionan limpiadores'],
        ];
        

        foreach ($vehicles as $key => $vehicle) {
            Vehicle::create([
                'vehicle'       => $vehicle[0],
                'plates'        => $vehicle[1],
                'serie'         => $vehicle[2],
                'brand'         => $vehicle[3],
                'color'         => $vehicle[4],
                'model'         => $vehicle[5],
                'inventory'     => $vehicle[6],
                'observations'  => $vehicle[7],
            ]);
        }
    }
}
