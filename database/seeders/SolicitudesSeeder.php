<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitudes;

class SolicitudesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solicitudes::create([
            'fecha_solicitud' => '2024-02-29', 
            'cliente_id' => '65dfef3773ebc7ce720738e7',
            'servicio_id' => '1', 
            'fecha_servicio' => '2024-03-05', 
            'hora_servicio' => '10:00pm', 
            'ubicacion_servicio' => 'Calle 123', 
            'duracion_servicio' => 2, 
          ]);
          
          Solicitudes::create([
            'fecha_solicitud' => '2024-02-29', 
            'cliente_id' => '65e022dc0da5f7e1330bcd3e',
            'servicio_id' => '2', 
            'fecha_servicio' => '2024-03-07',
            'hora_servicio' => '14:00', 
            'ubicacion_servicio' => 'Colonia chetumal', 
            'duracion_servicio' => 5,
          ]);
          
          
    }
}
