<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBicicletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bicicletas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30);
            $table->string('descripcion', 100);
            $table->string('modelo', 30);
            $table->string('color', 20);
            $table->float('rodada', 4);
            $table->float('precio', 10);
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bicicletas');
    }
}
