<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('identificacion', 50)->unique();
            $table->string('direccion', 50);
            $table->string('estado', 50);
            $table->string('pais', 50);
            $table->string('telefono', 50);
            $table->string('email', 50)->unique();
            $table->string('tarjeta_de_credito', 50)->unique();
            $table->string('usuario', 50)->unique();
            $table->string('password', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
