<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'identification' => 1234546786,
            'name' => 'Sebastian',
            'email' => 'sdlizarazo9@misena.edu.co',
            'password' => bcrypt('123456789'),
            'state' => 'Activo',
        ])->assignRole('Administrador');
    }
}
