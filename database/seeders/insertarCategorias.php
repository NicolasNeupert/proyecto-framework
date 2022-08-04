<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class insertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre' => 'Tecnologia',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis arcu lectus. Nulla facilisi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Gaming',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis arcu lectus. Nulla facilisi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Consolas',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis arcu lectus. Nulla facilisi.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
        $this->command->info("Se cargaron los datos de ejemplo productos");
    }
}
