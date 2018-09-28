<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function docentes()
    {
        return $this->hasMany('App\Docente');
    }

    public function administrativos()
    {
        return $this->hasMany('App\Administrativo');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }

    public function roles()
    {
        return $this->belongsTo('App\Rol');
    }
}
