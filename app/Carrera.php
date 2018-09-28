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

    public function docentes()
    {
        return $this->hasMany('App\Docente');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }

    public function docente()
    {
        return $this->belongsToMany('App\Docente','docente_carrera','carrera_idCarrera','docente_idDocente');
    }
}
