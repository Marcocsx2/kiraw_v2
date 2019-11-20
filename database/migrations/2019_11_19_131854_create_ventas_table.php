<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('ven_fecha');
            $table->string('ven_destino');
            $table->string('ven_estado');
            $table->date('ven_fecha_entrega');
            $table->double('ven_total');

            $table->bigInteger('transporte_id')->unsigned();
            $table->foreign('transporte_id')->references('id')->on('transporte');


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
        Schema::dropIfExists('ventas');
    }
}
