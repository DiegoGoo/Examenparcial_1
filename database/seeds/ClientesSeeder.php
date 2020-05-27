<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Clientes')->insert([
            ["Nombre" => "Erick", "Apaterno" => "Manuels", "Amaterno" => "Colorado", "Telefono" => "9841581445", "Email" => Str::random(10).'@gmail.com'],
            ["Nombre" => "Enrique", "Apaterno" => "Hernandez", "Amaterno" => "Canul", "Telefono" => "9841234567", "Email"  => Str::random(10).'@gmail.com'],
            ["Nombre" => "Diego", "Apaterno" => "Dominguez", "Amaterno" => "Alfaro", "Telefono" => "9846784367", "Email" => Str::random(10).'@gmail.com'],
        ]);
    }
}