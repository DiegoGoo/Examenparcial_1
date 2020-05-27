<?php

use Illuminate\Database\Seeder;

class BicicletasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Bicicletas')->insert([
            ["nombre" => "Bicicleta1", "descripcion" => "Montaña", "modelo" => "001", "color" => "negro", "rodada" => 26, "precio" => 2600],
            ["nombre" => "Bicicleta2", "descripcion" => "Ruta", "modelo" => "002", "color" => "roja", "rodada" => 26, "precio" => 3500], 
            ["nombre" => "Bicicleta3", "descripcion" => "Hibridas", "modelo" => "003", "color" => "azul", "rodada" => 28, "precio" => 2800],
            ["nombre" => "Bicicleta4", "descripcion" => "Urbanas", "modelo" => "004", "color" => "verde", "rodada" => 28, "precio" => 1600],
        ]);
    }
}