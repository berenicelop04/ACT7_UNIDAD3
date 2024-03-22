<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Solicitudes extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'fecha_solicitud',
        'cliente_id',
        'servicio_id',
        'fecha_servicio',
        'hora_servicio',
        'ubicacion_servicio',
        'duracion_servicio',
    ];

    protected $connection = 'mongodb';
    protected $collection = 'solicitudes';
    protected $primaryKey = '_id';
    

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
}

}
