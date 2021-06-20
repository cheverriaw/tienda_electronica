<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_carritos', function (Blueprint $table) {
            $table->id();

            //relacionamo carritos
            $table->unsignedBigInteger('id_carrito')->nullable();
            $table->foreign('id_carrito')->references('id')->on('carritos')->onDelete('set null');
            
            //relacionamos productos
            $table->unsignedBigInteger('id_productos')->nullable();
            $table->foreign('id_productos')->references('id')->on('productos')->onDelete('set null');
           
            $table->integer('cantidad',11);
            $table->decimal('precio', 8, 2);
            $table->decimal('subtotal', 8, 2);

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
        Schema::dropIfExists('detalle_carritos');
    }
}
