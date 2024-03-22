<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicios::create([
            'tipo_servicio' => 'Cuidados especiales',
            'descripcion_servicio' => 'Cuidado para una niña con cuidados especiales',
            'precio_servicio' => '500',
            'duracion_servicio' => '6',
            
        ]);
        Servicios::create([
            'tipo_servicio' => 'Cuidados para dos niñas',
            'descripcion_servicio' => 'Cuidado para dos niñas',
            'precio_servicio' => '700',
            'duracion_servicio' => '4',
            
        ]); 
    
    }
}
