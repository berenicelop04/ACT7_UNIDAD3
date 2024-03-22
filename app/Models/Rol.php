<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;


class Rol extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        '_id',
        'id_user',
        'Rol',
        'descripcion'
        
    ];


    protected $connection = "mongodb";
    protected $collection = "Roles";
    protected $primarykey = "_id";
//Un rol con muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_user', '_id');
    }
}
