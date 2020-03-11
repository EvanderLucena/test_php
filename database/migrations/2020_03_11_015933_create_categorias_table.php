<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome')->unique();
            $table->timestamps();
        });
        INSERT INTO categorias (nome)
            VALUES ('Marlon');
        INSERT INTO categorias (nome)
            VALUES ('Carlos');
        INSERT INTO categorias (nome)
            VALUES ('Josue');
        INSERT INTO categorias (nome)
            VALUES ('Jose');
        INSERT INTO categorias (nome)
            VALUES ('Carla');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
