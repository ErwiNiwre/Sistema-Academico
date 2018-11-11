<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //
    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function turnos()
    {
        return $this->belongsToMany('App\Turno','docente_turno','docente_id','turno_id');
    }

    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function carreras()
    {
        return $this->belongsToMany('App\Carrera','carrera_docente','docente_id','carrera_id');
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_docente','docente_id','curso_id');
    }

    public function materias()
    {
        return $this->belongsToMany('App\Materia','docente_materia','docente_id','materia_id');
    }
    
    
    
}
