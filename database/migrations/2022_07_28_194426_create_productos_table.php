<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->engine="InnoDB";
            $table->id();
            $table->String('nombre');
            $table->String('codigo');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('sucursal_id')->unsigned();
            $table->longText('descripcion');
            $table->String('imagen');
            $table->bigInteger('cantidad');
            $table->bigInteger('precio');
            $table->timestamps();

            //relaciones con tabla sucursal y categoria

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete("cascade");
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
