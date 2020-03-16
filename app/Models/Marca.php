<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    
    protected $table = 'marcas';

    protected $fillable=[

        'nombre'

    ];


    protected $hidden =['create_at', 'update_at'];


    public function setNombreAttribute($value){

        $this->attributes['nombre'] = ucfirst($value);

    }

    public function equipos(){

        return $this->hasMany('App\Models\Equipo');

    }

}
