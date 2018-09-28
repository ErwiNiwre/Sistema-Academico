<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    //
    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function materias()
    {
        return $this->belongsToMany('App\Materia','materia_aula','aula_idAula','materia_idMateria');
    }
}
