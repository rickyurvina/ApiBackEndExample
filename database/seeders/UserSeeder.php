<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Diego',
            'address' => 'Angamos 0610',
            'email' => 'diego@correo.com',
            'password' => Bcrypt('example1')
        ]);

        DB::table('users')->insert([
            'name' => 'Ricardo',
            'address' => 'Matta 2166',
            'email' => 'ricardo@correo.mx',
            'password' => Bcrypt('example2')
        ]);

        DB::table('users')->insert([
            'name' => 'Jorge',
            'address' => 'Ossa 0213',
            'email' => 'jorge@htomail.com',
            'password' => Bcrypt('example3')
        ]);

        DB::table('users')->insert([
            'name' => 'Camila',
            'address' => 'Las Venturas 2021',
            'email' => 'cami@outlook.cl',
            'password' => Bcrypt('example4')
        ]);

        DB::table('users')->insert([
            'name' => 'Luciano',
            'address' => 'Prat 2215',
            'email' => 'luciano@gmail.mx',
            'password' => Bcrypt('example5')
        ]);
    }
}
