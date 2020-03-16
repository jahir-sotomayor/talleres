<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('equipo/index', 'EquipoController@index');
