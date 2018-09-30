<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Departamento;
use App\Rol;
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
    public function store(Request $request)
    {
        //registrar
        $docente=new Docente;
        $item = $request->nombres;
        $a = $request->apellidos;
        $sexo = $request->sexo;         
        $email=$request->email;
        $contraseña=bcrypt($request->contraseña);
        
    	$docente->item=$nombres;
    	$docente->ci=$apellidos;
    	$docente->expedido=$sexo;
    	$docente->aPaterno=$email;
    	$docente->aMaterno=$contraseña;

    	$docente->nombre=$nombres;
    	$docente->fechaNacimiento=$apellidos;
    	$docente->genero=$sexo;
    	$docente->correo=$email;
        $docente->direccion=$contraseña;
        
    	$docente->telefono=$nombres;
        $docente->celular=$apellidos;
        

    	$docente->usuario_idUsuario=$sexo;

        $docente->save();
       // $user->create($request->all());
        return redirect('lista');
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
