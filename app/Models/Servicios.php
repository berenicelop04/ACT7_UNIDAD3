<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Servicios extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'tipo_servicio',
        'descripcion_servicio',
        'precio_servicio',
        'duracion_servicio',
       
    ];

    public function solicitudes()
    {
        return $this->hasMany(solicitudes::class);
}

}
