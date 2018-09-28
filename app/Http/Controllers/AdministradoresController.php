<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Docente;
use App\Materia;
use App\Administrativo;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    //
    public function carreras()
    {
        // $carrera=DB::table('carreras')->get();
        return "hola";
        //return view('administradores.registros')->with($carrera);
    }

    public function carrera()
    {
        // $carrera = DB::table('carreras')->where('idCarrera', 3)->get();
        $carrera = Carrera::all();
        // return $carrera;
        return view('administradores.registros',['carrera'=>$carrera]);
    }
}
