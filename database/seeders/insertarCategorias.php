<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class insertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 9; $i++){
            \DB::table('categorias')->insert(array(
                'nombre' => 'Categoria '.$i,
                'descripcion' => 'Categoria nº '.$i,
                'created_at' => now(),
                'updated_at' => now()
            ));
        }
        $this->command->info("Se cargaron los datos de ejemplo productos");
    }
}
