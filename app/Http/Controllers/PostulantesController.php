<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Postulante;
use App\Departamento;
use App\Rol;
use App\Turno;
use App\Documento;
use App\Usuario;

class PostulantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carreras = Carrera::all();
        $postulantes = Postulante::all();
        $turnos = Turno::all();
        $i = 0;

        $datos = array(
            'carreras' => $carreras,
            'postulantes' => $postulantes,
            'turnos'=>$turnos,
            'i' => $i
        );
        // return $datos;

        return view('postulantes.postulante')->with($datos);
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
        $turnos = Turno::all();

        $datos = array(
            'departamentos' => $departamentos,
            'roles' => $roles,
            'carreras' => $carreras,
            'turnos' => $turnos
        );
        // return $datos;
        return view('postulantes.postulante_registro')->with($datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $usuario = new Usuario;
        $usuario->usuario = request()->ci;
        $usuario->password = bcrypt(request()->ci);
        $usuario->rol_id = 7;
        $usuario->save();
        // return $usuario_id;

        $postulante = new Postulante;
        $postulante->ci = request()->ci;
        $postulante->expedido = request()->expedido;
        $postulante->aPaterno = request()->aPaterno;
        $postulante->aMaterno = request()->aMaterno;
        $postulante->nombre = request()->nombre;
        $postulante->fechaNacimiento = request()->fechaNacimiento;
        $postulante->genero = request()->genero;
        $postulante->estadoCivil = request()->estadoCivil;
        $postulante->correo = request()->correo;
        $postulante->direccion = request()->direccion;
        $postulante->telefono = request()->telefono;
        $postulante->celular = request()->celular;

        $carrera_id = Carrera::findOrfail($request->carrera);
        $turno_id = Turno::findOrfail($request->turno);
        $usuario_id = Usuario::where('usuario', '=', $request->ci)->first();

        $postulante->usuario_id = $usuario_id->id;
        $postulante->carrera_id = $carrera_id->id;
        $postulante->turno_id = $turno_id->id;
        // return $estudiante;
        $postulante->save();

        $documento = new Documento;
        $documento->documento_ci = request()->ci;
        $documento->certificadoNacimiento = request()->certificadoNacimiento;
        $documento->tituloBachiller = request()->tituloBachiller;
        $documento->depositoBancario = request()->depositoBancario;

        $postulante_id = Postulante::where('ci', $request->ci)->first();

        $documento->postulante_id = $postulante_id->id;

        $documento->save();
        // return $postulante_id;
        // $estudiante->carreras(request()->carrera_id);
        // return back();
        return redirect('/postulantes');
        // return "gggg";
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
        // $usuarios = Usuario::where('id', '=', $estudiante->usuario_id)->first();
        $postulantes=Postulante::findOrfail($id);
        $usuario_id= Usuario::where('id', $postulantes->usuario_id)->first();
        $rol_id=Rol::where('id', $usuario_id->rol_id)->first();
        $carrera_id= Carrera::where('id', $postulantes->carrera_id)->first();
        $turno_id= Turno::where('id', $postulantes->turno_id)->first();
        $documentos= Documento::where('postulante_id', $postulantes->id)->first();
        $departamentos = Departamento::where('id', $postulantes->expedido)->first();
        
        // return $departamentos;

        $datos = array(
            'postulantes' => $postulantes,
            'usuario_id'=>$usuario_id,
            'rol_id'=>$rol_id,
            'carrera_id'=>$carrera_id,
            'turno_id'=>$turno_id,
            'documentos'=>$documentos,
            'departamentos' => $departamentos
        );
        // return $usuarios;
        return view('postulantes.postulante_datos')->with($datos);
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
    
    public function datosNota($id)
    {
        $postulantes=Postulante::findOrfail($id);
        $departamentos = Departamento::where('id', $postulantes->expedido)->first();
        $datos = array(
            'postulantes' => $postulantes,
            // 'usuario_id'=>$usuario_id,
            // 'rol_id'=>$rol_id,
            // 'carrera_id'=>$carrera_id,
            // 'turno_id'=>$turno_id,
            // 'documentos'=>$documentos,
            'departamentos' => $departamentos
        );
        // return $postulantes;
        return view('postulantes.notas.notaPos')->with($datos);
    }

    public function nota(Request $request, $id)
    {
        $postulantes=Postulante::findOrfail($id);
        $postulantes->nota = request()->nota;
        // return "dsdds";
        $postulantes->save();
        return redirect('/postulantes');
    }
}
