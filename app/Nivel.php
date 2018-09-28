<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    //
    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function materias()
    {
        return $this->hasMany('App\Materia');
    }
}
