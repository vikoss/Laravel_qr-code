<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role = new Role();
        $role->name = 'NicolasRomero';
        $role->description = 'Gestion de codigos Qr para municipio de Nicolas Romero';
        $role->save();
        
        $role = new Role();
        $role->name = 'FuelStation-Office';
        $role->description = 'Oficinistas generando reportes de las recargas de conbustible';
        $role->save();

        $role = new Role();
        $role->name = 'FuelStation-Operations';
        $role->description = 'Encargados de reistro de recargas de conbustible';
        $role->save();
    }
}
