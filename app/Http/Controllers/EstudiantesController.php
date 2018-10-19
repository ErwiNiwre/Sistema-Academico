<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Estudiante;
use App\Rol;
use App\Departamento;
use App\Usuario;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        $estudiantes = Estudiante::all();
        // return $carrera;
        $datos=array(
            'carreras' => $carreras,
            'estudiantes' => $estudiantes
        );
        return view('estudiantes.estudiante')->with($datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Rol::all();
        $departamentos = Departamento::all();
        // return $carrera;
        $datos= array(
            'departamentos' => $departamentos,
            'roles' => $roles
        );
        return view('estudiantes.estudiante_registro')->with($datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $estudiante=new Estudiante;
    	$estudiante->matricula=request()->matricula;
    	$estudiante->ci=request()->ci;
    	$estudiante->expedido=request()->abreviatura;
    	$estudiante->aPaterno=request()->aPaterno;
    	$estudiante->aMaterno=request()->aMaterno;
    	$estudiante->nombre=request()->nombre;
    	$estudiante->fechaNacimiento=request()->fechaNacimiento;
        $estudiante->genero=request()->genero;
        $estudiante->estadoCivil=request()->estadoCivil;
    	$estudiante->correo=request()->correo;
        $estudiante->direccion=request()->direccion;
    	$estudiante->telefono=request()->telefono;
        $estudiante->celular=request()->celular;
        $estudiante->pensum=request()->pensum;
        
        $userid=Usuario::where('usuario', request()->ci) ->first();
    	$estudiante->usuario_idUsuario=$userid->id;

        $estudiante->save();
        // return back();
        return redirect('/Estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
        $usuarios=Usuario::where('id','=',$estudiante->usuario_idUsuario)->first();
        $roles=Rol::all();
        $departamentos = Departamento::all();
        $datos= array(
            'estudiantes'=>$estudiante,
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'roles' => $roles
        );
        // return $usuarios;
        return view('estudiantes.estudiante_datos')->with($datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
        $userid=Usuario::where('id','=',$estudiante->usuario_idUsuario)->get();
        $roles=Rol::all();
        $departamentos = Departamento::all();
        $datos= array(
            'estudiantes'=>$estudiante,
            'departamentos' => $departamentos,
            'usuarios' => $userid,
            'roles' => $roles
        );
        // return $u;
        return view('estudiantes.editar')->with($datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Estudiante $estudiante)
    {
        $usuarios = Usuario::where('id', '=', $estudiante->usuario_idUsuario)->first();
        
        // $estudiante=new Estudiante;

        $estudiante->matricula=request()->matricula;
    	$estudiante->ci=request()->ci;
    	$estudiante->expedido=request()->abreviatura;
    	$estudiante->aPaterno=request()->aPaterno;
    	$estudiante->aMaterno=request()->aMaterno;
    	$estudiante->nombre=request()->nombre;
    	$estudiante->fechaNacimiento=request()->fechaNacimiento;
        $estudiante->genero=request()->genero;
        $estudiante->estadoCivil=request()->estadoCivil;
    	$estudiante->correo=request()->correo;
        $estudiante->direccion=request()->direccion;
    	$estudiante->telefono=request()->telefono;
        $estudiante->celular=request()->celular;
        $estudiante->pensum=request()->pensum;

        $estudiante->usuario_idUsuario = $usuarios->id;

        $estudiante->save();
        $departamentos = Departamento::all();
        $roles=Rol::all();
        $datos= array(
            'estudiantes'=>$estudiante,
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'roles' => $roles
        );
        // return $estudiante;
        return view('estudiantes.estudiante_datos')->with($datos);
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
}
