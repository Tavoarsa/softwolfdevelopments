<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->string('proveedor');            
            $table->string('nombre');
            $table->string('cantidad');
            $table->string('precioCompra');
            $table->string('precioVenta');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            

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
        Schema::dropIfExists('productos');
    }
}
