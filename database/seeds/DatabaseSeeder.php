<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DependencySeeder::class,
            VehicleSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            EventTypeSeeder::class,
            RelationshipTypeSeeder::class,
        ]);
    }
}
