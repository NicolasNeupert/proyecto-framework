<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class insertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'ciudad' => 'Santiago',
                'comuna' => 'Maipú',
                'direccion' => 'Pasaje 02',
                'telefono' => '+5699997845',
                'email' => 'email@email.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ciudad' => 'Santiago',
                'comuna' => 'Cerrillos',
                'direccion' => 'Pasaje 03',
                'telefono' => '+5699997845',
                'email' => 'email@email.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'ciudad' => 'Santiago',
                'comuna' => 'Providencia',
                'direccion' => 'Pasaje 09',
                'telefono' => '+5699997845',
                'email' => 'email@email.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
        $this->command->info("Se cargaron los datos de ejemplo productos");
    }
}
