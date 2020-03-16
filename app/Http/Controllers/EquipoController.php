<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;


class EquipoController extends Controller
{
    public function index(){
        //$equipos = Equipo::all();
        $equipos = Equipo::find(34);
        return $equipos;
    }
}
