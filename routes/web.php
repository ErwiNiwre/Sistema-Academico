<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.incos_inicio');
});

Route::get('prueba', function () {
    return view('prueba');
});

Route::get('inicio_sesion', function () {
    return view('login');
});

//Super Administrador
Route::get('super_administrador', function () {
    return view('prueba');
});

//Administrador
Route::get('administrador', function () {
    return view('administradores/registros');
});

//Docente
Route::resource('Docentes', 'DocentesController');

Route::get('editarrr', function () {
    return view('usuarios/editar');
});


Route::get('docente', function () {
    return view('docentes/informacion_docente');
});

Route::get('editar', function () {
    return view('docentes/editar');
});

Route::get('docente/registro_notas_trimestral', function () {
    return view('docentes/registro_notas_trimestral');
});

Route::get('docente/registro_notas_bimestral', function () {
    return view('docentes/registro_notas_bimestral');
});

Route::get('docente/horario', function () {
    return view('docentes/horario');
});

//Estudiante
Route::get('estudiante', function () {
    return view('prueba');
});