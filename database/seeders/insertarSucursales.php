<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class insertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 9; $i++){
            \DB::table('sucursales')->insert(array(
                'comuna' => 'Comuna nª '.$i,
                'direccion' => 'Direccion '.$i,
                'telefonoSucursal' => 'Telefono '.$i,
                'emailSucursal' => 'Email '.$i,
                'horarioSucursal' => 'Horario '.$i,
                'created_at' => now(),
                'updated_at' => now()
            ));
        }
        $this->command->info("Se cargaron los datos de ejemplo productos");
    }
}
