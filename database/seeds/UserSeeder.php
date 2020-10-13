<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['Juanito', 'victor@gmail.com', bcrypt('12345'), 'NicolasRomero'],
            ['Panchito', 'juan@gmail.com', bcrypt('12345'), 'FuelStation-Operations'],
            ['Benito', 'ben@gmail.com', bcrypt('12345'), 'FuelStation-Office']
        ];
        foreach ($users as $key => $user) {
            $u = User::create([
                'name'       => $user[0],
                'email'        => $user[1],
                'password'         => $user[2],
            ]);
            $u->roles()->attach(Role::where('name', $user[3])->first());
        }
    }
}
