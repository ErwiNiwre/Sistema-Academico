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
        $carrera = Carrera::all();
        // return $carrera;
        return view('docentes.docente', ['carrera' => $carrera]);
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
        $docente=new Docente;
    	$docente->item=request()->item;
    	$docente->ci=request()->ci;
    	$docente->expedido=request()->abreviatura;
    	$docente->aPaterno=request()->paterno;
    	$docente->aMaterno=request()->materno;
    	$docente->nombre=request()->nombre;
    	$docente->fechaNacimiento=request()->fecha;
    	$docente->genero=request()->genero;
    	$docente->correo=request()->correo;
        $docente->direccion=request()->direccion;
        
    	$docente->telefono=request()->telefono;
        $docente->celular=request()->celular;
        
        $userid=Usuario::where('usuario', request()->ci) ->first();
    	$docente->usuario_idUsuario=$userid->id;

        $docente->save();
        return back();
       // $user->create($request->all());
        // return redirect('lista');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
