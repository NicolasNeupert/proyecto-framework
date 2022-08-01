<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class insertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 9; $i++){
            \DB::table('productos')->insert(array(
                'nombre' => 'Nombre de producto '.$i,
                'codigo' => 'CODE#'.$i,
                'categoria' => 'Categoria n° '.$i,
                'sucursal' => 'Sucursal n° '.$i,
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue eget ipsum non mollis. Sed efficitur eleifend fringilla. Cras maximus dapibus purus non congue. Nullam a porttitor arcu. Aliquam nunc erat, maximus ut enim vitae, pulvinar semper nunc. Pellentesque rhoncus quam turpis, et pharetra magna egestas et. Duis quis massa condimentum, commodo felis luctus, sollicitudin nisl. Morbi ac ultrices justo, at bibendum lectus. Vivamus tristique placerat arcu, nec accumsan dolor viverra et.',
                'imagen' => '/img/producto-example.jpg',
                'cantidad' => 99,
                'precio' => 9990,
                'created_at' => now(),
                'updated_at' => now()
            ));
        }
        $this->command->info("Se cargaron los datos de ejemplo productos");
    }
}
