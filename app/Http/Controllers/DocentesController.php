<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Departamento;
use App\Rol;
use App\Usuario;
use App\Docente;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        $docentes = Docente::all();
        // return $carrera;
        $datos = array(
            'carreras' => $carreras,
            'docentes' => $docentes
        );
        return view('docentes.docente')->with($datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Rol::all();
        $departamentos = Departamento::all();
        $carreras = Carrera::all();
        // return $carrera;
        $datos = array(
            'departamentos' => $departamentos,
            'carreras' => $carreras,
            'roles' => $roles
        );
        return view('docentes.docente_registro')->with($datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //registrar
        //dd(request()->all()); ver datos
        $docente = new Docente;
        $docente->item = request()->item;
        $docente->ci = request()->ci;
        $docente->expedido = request()->expedido;
        $docente->aPaterno = request()->aPaterno;
        $docente->aMaterno = request()->aMaterno;
        $docente->nombre = request()->nombre;
        $docente->fechaNacimiento = request()->fechaNacimiento;
        $docente->genero = request()->genero;
        $docente->estadoCivil = request()->estadoCivil;
        $docente->fechaIngreso = request()->fechaIngreso;
        $docente->correo = request()->correo;
        $docente->direccion = request()->direccion;
        $docente->telefono = request()->telefono;
        $docente->celular = request()->celular;

        $userid = Usuario::where('usuario', request()->ci)->first();
        // $carreid = Carrera::where('id', request()->carrera_idCarrera)->first();
        $docente->usuario_id = $userid->id;

        // $docente->carreras()->attach($carreid);

        $docente->save();
        
        // return back();
        return redirect('/docentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        $usuarios = Usuario::where('id', '=', $docente->usuario_id)->first();
        $roles = Rol::all();
        $departamentos = Departamento::all();
        $carreras = Carrera::all();
        $datos = array(
            'docentes' => $docente,/*  */
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'roles' => $roles,
            'carreras' => $carreras
        );
        // return $usuarios;
        return view('docentes.docente_datos')->with($datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        $userid = Usuario::where('id', '=', $docente->usuario_id)->get();
        $roles = Rol::all();
        $departamentos = Departamento::all();
        $datos = array(
            'docentes' => $docente,
            'departamentos' => $departamentos,
            'usuarios' => $userid,
            'roles' => $roles
        );
        // return $u;
        return view('docentes.editar')->with($datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Docente $docente)
    {
        // $userid = Usuario::where('id', '=', $docente->usuario_idUsuario)->get();
        $usuarios = Usuario::where('id', '=', $docente->usuario_id)->first();

        $docente->item = request()->item;
        $docente->ci = request()->ci;
        $docente->expedido = request()->expedido;
        $docente->aPaterno = request()->aPaterno;
        $docente->aMaterno = request()->aMaterno;
        $docente->nombre = request()->nombre;
        $docente->fechaNacimiento = request()->fechaNacimiento;
        $docente->genero = request()->genero;
        $docente->estadoCivil = request()->estadoCivil;
        $docente->fechaIngreso = request()->fechaIngreso;
        $docente->correo = request()->correo;
        $docente->direccion = request()->direccion;
        $docente->telefono = request()->telefono;
        $docente->celular = request()->celular;

        $docente->usuario_id = $usuarios->id;

        $docente->save();
        $departamentos = Departamento::all();
        $roles = Rol::all();
        $datos = array(
            'docentes' => $docente,
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'roles' => $roles
        );
        // return $usuarios;
        return view('docentes.docente_datos')->with($datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function carreras($id)
    {
        $docentes = Docente::findOrfail($id);
        
        $carreras = $docentes->carreras;
        //return $carreras;
        $materias= $docentes->materias;
        // return $materias;
        // $carreras = Carrera::all();
        // $roles = Rol::all();
        // return $docentes;
        $j = 0;
        $datos = array(
            'carreras' => $carreras,
            'materias' => $materias,
            'docentes' => $docentes,
            'j' => $j
        );
        return view('carreras.carrera')->with($datos);
    }

    public function listar()
    {
        return view('docentes.listas_estudiantes.estudiantes');
    }

    public function notas()
    {
        return view('docentes.notas.nota_bimestral');
    }
}
