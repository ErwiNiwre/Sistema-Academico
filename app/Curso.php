<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function aulas()
    {
        return $this->belongsTo('App\Aula');
    }

    public function niveles()
    {
        return $this->belongsTo('App\Nivel');
    }

    public function paralelos()
    {
        return $this->belongsTo('App\Paralelo');
    }

    public function turnos()
    {
        return $this->belongsTo('App\Turno');
    }

    public function estudiantes()
    {
        return $this->belongsToMany('App\Estudiante','curso_estudiante','curso_idCurso','estudiante_idEstudiante');
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente','docente_curso','curso_idCurso','docente_idDocente');
    }
}
