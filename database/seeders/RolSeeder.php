<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'id_user'=> '65e022dc0da5f7e1330bcd3e',
            'Rol' => 'Niñera',
            'descripcion' => 'Persona que hace los servicios',
        ]);

        Rol::create([
            'id_user'=> '65dfef3773ebc7ce720738e6',
            'nombre' => 'Cliente',
            'descripcion' => 'Persona que solicita los servicios',
        ]);

        Rol::create([
            'id_user'=> '65dfef3773ebc7ce720738e7',
            'nombre' => 'Administrador',
            'descripcion' => 'Controla los servicios que piden',
        ]);


    }
}
