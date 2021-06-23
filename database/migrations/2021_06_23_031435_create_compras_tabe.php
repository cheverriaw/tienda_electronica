<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTabe extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            //relacionamos con el cliente
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('set null');

            //relacionamo carritos
            $table->unsignedBigInteger('id_carrito')->nullable();
            $table->foreign('id_carrito')->references('id')->on('carritos')->onDelete('set null');
             
            //relacionamo pagos
            $table->unsignedBigInteger('id_pago')->nullable();
            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('set null');


            $table->decimal('total', 8, 2);
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
        Schema::dropIfExists('compras');
    }
}
