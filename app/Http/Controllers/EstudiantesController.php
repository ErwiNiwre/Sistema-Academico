<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Estudiante;
use App\Rol;
use App\Departamento;
use App\Usuario;
use App\Materia;
use App\Periodo;

use App\Turno;

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
        $usuer = Usuario::all();
        // return $usuer;

        $datos = array(
            'carreras' => $carreras,
            'estudiantes' => $estudiantes
        );
        // return $estudiantes;
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

        // Estudiante::create($request->all());

        // return $request;
        $estudiante = new Estudiante;

        $estudiante->matricula = request()->matricula;
        $estudiante->ci = request()->ci;
        $estudiante->expedido = request()->expedido;
        $estudiante->aPaterno = request()->aPaterno;
        $estudiante->aMaterno = request()->aMaterno;
        $estudiante->nombre = request()->nombre;
        $estudiante->fechaNacimiento = request()->fechaNacimiento;
        $estudiante->genero = request()->genero;
        $estudiante->estadoCivil = request()->estadoCivil;
        $estudiante->correo = request()->correo;
        $estudiante->direccion = request()->direccion;
        $estudiante->telefono = request()->telefono;
        $estudiante->celular = request()->celular;
        $estudiante->pensum = request()->pensum;

        $userid = Usuario::where('usuario', request()->ci)->first();
        // return $userid->id;
        $estudiante->usuario_id = $userid->id;
        // return $estudiante;
        $estudiante->save();
        $estudiante->carreras(request()->carrera_id);
        // return back();
        return redirect('/estudiantes');
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
        $usuarios = Usuario::where('id', '=', $estudiante->usuario_id)->first();
        $roles = Rol::all();
        $departamentos = Departamento::all();
        $datos = array(
            'estudiantes' => $estudiante,
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
        $userid = Usuario::where('id', '=', $estudiante->usuario_id)->get();
        $roles = Rol::all();
        $departamentos = Departamento::all();
        $datos = array(
            'estudiantes' => $estudiante,
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
        $usuarios = Usuario::where('id', '=', $estudiante->usuario_id)->first();
    
        $estudiante->matricula = request()->matricula;
        $estudiante->ci = request()->ci;
        $estudiante->expedido = request()->expedido;
        $estudiante->aPaterno = request()->aPaterno;
        $estudiante->aMaterno = request()->aMaterno;
        $estudiante->nombre = request()->nombre;
        $estudiante->fechaNacimiento = request()->fechaNacimiento;
        $estudiante->genero = request()->genero;
        $estudiante->estadoCivil = request()->estadoCivil;
        $estudiante->correo = request()->correo;
        $estudiante->direccion = request()->direccion;
        $estudiante->telefono = request()->telefono;
        $estudiante->celular = request()->celular;
        $estudiante->pensum = request()->pensum;

        $estudiante->usuario_id = $usuarios->id;
// return $estudiante;
        $estudiante->save();
        $departamentos = Departamento::all();
        $roles = Rol::all();
        $datos = array(
            'estudiantes' => $estudiante,
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

    public function pensum($id)
    {
        // $carreras = Carrera::all();
        $estudiantes = Estudiante::findOrfail($id);
        // $carreras = Carrera::where('id', $estudiantes->carreras;
        //return $estudiantes->carreras;
        foreach ($estudiantes->carreras as $carrera) {
            $carre = $carrera;
        }
        $materias = Materia::where('carrera_id', $carre->id)->get();
        // return $materias;
        $j = 0;
        $datos = array(
            'carreras' => $carre,
            'materias' => $materias,
            'estudiantes' => $estudiantes,
            'j' => $j
        );
        return view('pensums.pensum')->with($datos);
    }

    public function historial($id)
    {
        $estudiantes = Estudiante::findOrfail($id);
        foreach ($estudiantes->carreras as $carrera) {
            $carre = $carrera;
        }
        $bi_notas = $estudiantes->bi_notas;
        $materias = Materia::all();
        $periodos = Periodo::all();
        $j = 0;
        $datos = array(
            'carreras' => $carre,
            'materias' => $materias,
            'estudiantes' => $estudiantes,
            'periodos' => $periodos,
            'bi_notas' => $bi_notas,
            'j' => $j
        );
        return view('historiales.historial')->with($datos);
    }

    public function boletin($id)
    {
        $estudiantes = Estudiante::findOrfail($id);
        foreach ($estudiantes->carreras as $carrera) {
            $carre = $carrera;
        }
        $bi_notas = $estudiantes->bi_notas;
        $materias = Materia::all();
        $periodos = Periodo::all();
        $nombrepdf = "Boletin";
        $j = 0;
        $titulo = "Boletin";
        return \PDF::loadView(
            'historiales.boletines.impresion',
            compact(
                'estudiantes',
                'carre',
                'bi_notas',
                'materias',
                'periodos',
                'j',
                'titulo'
            )
        )
            ->setPaper('letter')
            ->setOption('encoding', 'utf-8')
            ->setOption('footer-right', 'Pagina [page] de [toPage]')
            ->setOption('footer-left', 'INCOS EL ALTO - 2018')
            ->stream("$nombrepdf");
    }


    // public function boletin($id)
    // {
    //     $contributions  = json_decode($request->contributions);     
    //     $total = $request->total;
    //     $total_literal = Util::convertir($total);
    //     $affiliate = Affiliate::find($request->affiliate_id);                                
    //     $date = Util::getStringDate(date('Y-m-d'));
    //     $title = "REVISAR";
    //     $username = Auth::user()->username;//agregar cuando haya roles
    //     $name_user_complet = Auth::user()->first_name." ".Auth::user()->last_name;        
    //     $detail = "Pago de aporte directo";
    //     $beneficiary = $affiliate;
    //     $name_beneficiary_complet = Util::fullName($beneficiary);
    //     $pdftitle = "Comprobante";
    //     $namepdf = Util::getPDFName($pdftitle, $beneficiary);
    //     $util = new Util();
    //     return \PDF::loadView(
    //         'quota_aid.print.affiliate_aid_contribution', 
    //             compact(
    //                     'date', 
    //                     'username', 
    //                     'title', 
    //                     'number',  
    //                     'beneficiary', 
    //                     'contributions',
    //                     'total',
    //                     'total_literal',
    //                     'detail',
    //                     'util',
    //                     'name_user_complet',
    //                     'name_beneficiary_complet'
    //             ))
    //             ->setPaper('letter')
    //             ->setOption('encoding', 'utf-8')
    //             ->setOption('footer-right', 'Pagina [page] de [toPage]')
    //             ->setOption('footer-left', 'PLATAFORMA VIRTUAL DE LA MUSERPOL - 2018')                
    //             ->stream("$namepdf");
    //     // $carreras = Carrera::all();
    //     $estudiantes = Estudiante::findOrfail($id);
    //     // $carreras = Carrera::where('id', $estudiantes->carreras;
    //     //return $estudiantes->carreras;
    //     foreach ($estudiantes->carreras as $carrera) {
    //         $carre = $carrera;
    //     }
    //     $materias = Materia::where('carrera_id', $carre->id)->get();
    //     // return $materias;
    //     $j=0;
    //     $datos = array(
    //         'carreras' => $carre,
    //         'materias' => $materias,
    //         'estudiantes' => $estudiantes,
    //         'j'=>$j
    //     );
    //     return view('pensums.pensum')->with($datos);
    // }
}
