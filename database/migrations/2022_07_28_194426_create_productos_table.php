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
                $table->engine="InnoDB";
                $table->id();
                $table->String('nombre');
                $table->String('codigo');

                // CLAVES FORANEAS
                //$table->foreign('categoria_id')->constrained('categorias')->cascadeOnUpdate()->nullOnDelete();
                //$table->foreign('sucursal_id')->constrained('sucursales')->cascadeOnUpdate()->nullOnDelete();
                
                $table->foreing('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
                $table->foreing('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');

                $table->longText('descripcion');
                $table->String('imagen');
                $table->bigInteger('cantidad');
                $table->bigInteger('precio');
                $table->timestamps();

                
                
            
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
        Schema::dropIfExists('productos');
    }
}
