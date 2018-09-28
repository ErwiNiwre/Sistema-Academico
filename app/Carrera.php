<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    public function materias()
    {
        return $this->hasMany('App\Materia');
    }

    public function administrativos()
    {
        return $this->hasMany('App\Administrativo');
    }

    public function estudiantes()
    {
        return $this->belongsToMany('App\Estudiante','estudiante_carrera','carrera_idCarrera','estudiante_idEstudiante');
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente','docente_carrera','carrera_idCarrera','docente_idDocente');
    }
}
