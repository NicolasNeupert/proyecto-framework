<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('productos_sucursales')) {
            Schema::create('productos_sucursales', function (Blueprint $table) {
                $table->id();
                $table->integer('productos_id')->unsigned();
                $table->integer('sucursales_id')->unsigned();
                $table->timestamps();
            });
            
            Schema::table('productos_sucursales', function(Blueprint $table) 
            {
                $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
                $table->foreign('sucursales_id')->references('id')->on('sucursales')->onDelete('cascade');
            });

        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_sucursales');
    }
}
