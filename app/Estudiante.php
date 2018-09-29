<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function bi_notas()
    {
        return $this->hasMany('App\Bi_nota');
    }

    public function tri_notas()
    {
        return $this->hasMany('App\Tri_nota');
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_estudiante','estudiante_idEstudiante','curso_idCurso');
    }

    public function carreras()
    {
        return $this->belongsToMany('App\Carrera','estudiante_carrera','estudiante_idEstudiante','carrera_idCarrera');
    }
}
