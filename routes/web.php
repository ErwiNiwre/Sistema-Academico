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
            // return view('welcome');
        });

// // Administrativos
// Route::get('Admin','AdministrativosController@index');
// Route::get('Admin/registro','AdministrativosController@create');
//Route::get('Admin/nuevo','AdministradoresController@nuevo');

// Postulante
Route::resource('postulantes','PostulantesController');
Route::get('postulantes/{postulante}/datosNota','PostulantesController@datosNota')->name('postulantes.datosNota');
Route::patch('postulantes/{postulante}/nota','PostulantesController@nota')->name('postulantes.nota');


// Estudiante
Route::resource('estudiantes','EstudiantesController');
Route::get('estudiantes/{estudiante}/pensum','EstudiantesController@pensum')->name('estudiantes.pensum');
Route::get('estudiantes/{estudiante}/boletin','EstudiantesController@boletin')->name('estudiantes.boletin');
Route::get('estudiantes/{estudiante}/historial','EstudiantesController@historial')->name('estudiantes.historial');


// Docente
Route::resource('docentes','DocentesController');
Route::get('docentes/{docentes}/carreras','DocentesController@carreras')->name('docentes.carreras');
Route::get('docentes/{docentes}/listar','DocentesController@listar')->name('docentes.listar');
Route::get('docentes/{docentes}/notas','DocentesController@notas')->name('docentes.notas');

//Usuarios
Route::resource('usuarios','UsuariosController');
// esto de abajo luego
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');

// Route::get('Docentes','DocentesController@index');
// Route::get('Docentes/registro','DocentesController@create');
// Route::post('registrardoc', 'DocentesController@store');
// Route::get('Docentes/{docente}','DocentesController@show');
// Route::get('Docentes/{docente}/editar','DocentesController@edit');
// Route::patch('Docentes/{docente}','DocentesController@update');

// Route::get('/docentes','DocentesController@index')->name('docentes.index');                     //Muestra a todos los docentes
// Route::get('/docentes/nuevo','DocentesController@create')->name('docentes.create');             //Muestra el formulario para crear un nuevo docentes
// Route::post('/docentes', 'DocentesController@store')->name('docentes.store');                   //Guarda un nuevo docentes
// Route::get('/docentes/{docente}','DocentesController@show')->name('docentes.show');             //Muestra a un docentes
// Route::get('/docentes/{docente}/editar','DocentesController@edit')->name('docentes.edit');      //Edita a uno de los docentes
// Route::patch('/docentes/{docente}','DocentesController@update')->name('docentes.update');       //Actualiza a uno de los docentes
// Route::delete('/docentes/{docente}','DocentesController@destroy')->name('docentes.destroy');    //Elimina a uno de los docentes

// //Route::get('Admin/nuevo','AdministradoresController@nuevo');

// // Estudiante
// // Route::get('Estudiante','EstudiantesController@index');
// // Route::get('Estudiante/registro','EstudiantesController@create');
// Route::get('Estudiantes','EstudiantesController@index');
// Route::get('Estudiantes/registro','EstudiantesController@create');
// Route::post('registrarest', 'EstudiantesController@store');
// Route::get('Estudiantes/{estudiante}','EstudiantesController@show');
// Route::get('Estudiantes/{estudiante}/editar','EstudiantesController@edit');
// Route::patch('Estudiantes/{estudiante}','EstudiantesController@update');
// //Route::get('Admin/nuevo','AdministradoresController@nuevo');

// //usuarioss
// //Route::post('registrarusu', ['as'=>'registrar', 'doc'=>'UsuariosController@store']);

// Route::post('registraru','UsuariosController@store');
// Route::get('Usuarios/{usuario}','UsuariosController@show');
// Route::get('Usuarios/{usuario}/editar','UsuariosController@edit');
// Route::patch('Usuarios/{usuario}','UsuariosController@update');



// Route::get('Notas/registro_notas_trimestral', function () {
//     return view('notas.registro_notas_trimestral');
// });
//  Route::get('Notas/registro_notas_bimestral', function () {
//     return view('notas.registro_notas_bimestral');
// });
//  Route::get('Horarios/horario', function () {
//     return view('horarios.horario');
// });

// Route::get('Pensums/pensum', function () {
//     return view('pensums.pensum');
// });

// Route::get('Historiales/historial', function () {
//     return view('historiales.historial');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
