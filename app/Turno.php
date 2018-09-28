<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    //
    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function docentes()
    {
        return $this->belongsToMany('App\Docente','docente_turno','turno_idTurno','docente_idDocente');
    }

    public function administrativos()
    {
        return $this->belongsToMany('App\Administrativo','administrativo_turno','turno_idTurno','administrativo_idAdministrativo');
    }

}
