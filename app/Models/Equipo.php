<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable=[
        'nombre' , 'serial', 'marca_id', 'caracteristica'
    ];

    protected $hidden =['create_at', 'update_at'];

    protected $casts = ['caracteristica' => 'array'];

    protected $appends = ['id_serial', 'marca_equipo'];

    public function setTipoAttribute($value){

        $this->attributes['tipo'] = ucwords($value);

    }

    public function getIdSerialAttribute(){

        return "{$this->serial}-{$this->id}";

    }

    public function getMarcaEquipoAttribute(){

        return $this->marca;

    }

    public function marca(){

        return $this->belongsTo('App\Models\Marca');

    }

    /*public function marca(){

        return $this->hasMany('App\Models\Marca');

    }*/
}
