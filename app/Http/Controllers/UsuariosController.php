<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Rol;
use App\Docente;
use App\Departamento;
use App\Estudiante;
use App\Administrativo;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //dd(request()->all()); ver que reciba
        // $u=$request->usuario;
        // return $u;
        $usuario=new Usuario;
    	$usuario->usuario=request()->usuario;
    	$usuario->password=bcrypt(request()->contrasena);
        $usuario->rol_id=request()->rol;
        $usuario->save();
        return back();
        // return view('docentes.docente_registro');
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
    public function edit(Usuario $usuario)
    {
        // $docentes=Docente::where('usuario_idUsuario','=',$docente->id)->first();
        $roles=Rol::all();
        $datos= array(
            'usuarios' => $usuario,
            'roles' => $roles
        );
        // return "HOLAAAAAAA";
        return view('usuarios.editar')->with($datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Usuario $usuario)
    { 
        if ($usuario->rol_id==5) {
            $docentes = Docente::where('usuario_id', '=', $usuario->id)->first();
        } else {
            if ($usuario->rol_id==6) {
                $estudiantes = Estudiante::where('usuario_id', '=', $usuario->id)->first();
            } else {
                if ($usuario->rol_id==7) {
                    // $docentes = Postulante::where('usuario_idUsuario', '=', $usuario->id)->first();
                } else {
                    $administrativos = Administrativo::where('usuario_id', '=', $usuario->id)->first();
                }
                
            }
        }
        // $usuario->usuario=request()->usuario;
        $usuario->password=bcrypt(request()->contrasena);
        $usuario->save();
        $departamentos = Departamento::all();
        $roles=Rol::all();
        $datos= array(
            'docentes'=>$docentes,
            'departamentos' => $departamentos,
            'usuarios' => $usuario,
            'roles' => $roles
        );
        if ($usuario->rol_id==5) {
            return redirect("/docentes/$docentes->id");
        } else {
            if ($usuario->rol_id==6) {
                return redirect("/estudiantes/$estudiantes->id");
            } else {
                if ($usuario->rol_id==7) {
                    // return redirect("/Postulantes/$postulantes->id");
                } else {
                    return redirect("/admin/$administrativos->id");
                }
                
            }
        }
        
        // return redirect("/Docentes/$docentes->id");
        // return view('docentes.docente_datos')->with($datos);
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
