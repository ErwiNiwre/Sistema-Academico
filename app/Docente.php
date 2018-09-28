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
        return $this->belongsToMany('App\Turno','docente_turno','docente_idDocente','turno_idTurno');
    }

    public function carreras()
    {
        return $this->belongsToMany('App\Carrera','docente_carrera','docente_idDocente','carrera_idCarrera');
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','docente_curso','docente_idDocente','curso_idCurso');
    }
}
