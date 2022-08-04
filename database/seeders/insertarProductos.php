<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class insertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'nombre' => 'Nombre de producto',
                'codigo' => 'CODE#',
                'categoria_id' => 1,
                'sucursal_id' => 1,
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue eget ipsum non mollis. Sed efficitur eleifend fringilla. Cras maximus dapibus purus non congue. Nullam a porttitor arcu. Aliquam nunc erat, maximus ut enim vitae, pulvinar semper nunc. Pellentesque rhoncus quam turpis, et pharetra magna egestas et. Duis quis massa condimentum, commodo felis luctus, sollicitudin nisl. Morbi ac ultrices justo, at bibendum lectus. Vivamus tristique placerat arcu, nec accumsan dolor viverra et.',
                'imagen' => '/img/producto-example.jpg',
                'cantidad' => 99,
                'precio' => 9990,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Nombre de producto2',
                'codigo' => 'CODE#2',
                'categoria_id' => 2,
                'sucursal_id' => 1,
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue eget ipsum non mollis. Sed efficitur eleifend fringilla. Cras maximus dapibus purus non congue. Nullam a porttitor arcu. Aliquam nunc erat, maximus ut enim vitae, pulvinar semper nunc. Pellentesque rhoncus quam turpis, et pharetra magna egestas et. Duis quis massa condimentum, commodo felis luctus, sollicitudin nisl. Morbi ac ultrices justo, at bibendum lectus. Vivamus tristique placerat arcu, nec accumsan dolor viverra et.',
                'imagen' => '/img/producto-example.jpg',
                'cantidad' => 99,
                'precio' => 9990,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
        $this->command->info("Se cargaron los datos de ejemplo productos");
    }
}
