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

// Administrativos
Route::get('Admin','AdministrativosController@index');
Route::get('Admin/registro','AdministrativosController@create');
//Route::get('Admin/nuevo','AdministradoresController@nuevo');

// Docente
Route::get('Docentes','DocentesController@index');
Route::get('Docentes/registro','DocentesController@create');
Route::post('registrardoc', 'DocentesController@store');
Route::get('Docentes/{docente}','DocentesController@show');
Route::get('Docentes/{docente}/editar','DocentesController@edit');
Route::patch('Docentes/{docente}','DocentesController@update');
//Route::get('Admin/nuevo','AdministradoresController@nuevo');

// Estudiante
Route::get('Estudiante','EstudiantesController@index');
Route::get('Estudiante/registro','EstudiantesController@create');
//Route::get('Admin/nuevo','AdministradoresController@nuevo');

//usuarioss
//Route::post('registrarusu', ['as'=>'registrar', 'doc'=>'UsuariosController@store']);

Route::post('registraru','UsuariosController@store');
Route::get('Usuarios/{usuario}','UsuariosController@show');
Route::get('Usuarios/{usuario}/editar','UsuariosController@edit');
Route::patch('Usuarios/{usuario}','UsuariosController@update');
