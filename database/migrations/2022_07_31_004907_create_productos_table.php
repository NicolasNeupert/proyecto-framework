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
        if (!Schema::hasTable('productos')) {
            Schema::create('productos', function (Blueprint $table) {
                $table->increments('id');
                $table->String('nombre');
                $table->String('codigo');
                $table->integer('categoria_id')->unsigned();
                $table->longText('descripcion');
                $table->String('imagen');
                $table->bigInteger('precio');
                $table->integer('estado');
                $table->timestamps();
            });
        }

        Schema::table('productos', function(Blueprint $table) 
        {
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
