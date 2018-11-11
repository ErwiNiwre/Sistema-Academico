<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    //
    public function usuarios()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function turnos()
    {
        return $this->belongsTo('App\Turno');
    }

    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function documentos()
    {
        return $this->hasMany('App\Documentos');
    }
}
