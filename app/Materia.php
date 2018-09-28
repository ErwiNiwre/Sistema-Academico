<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    public function carreras()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function niveles()
    {
        return $this->belongsTo('App\Nivel');
    }

    public function bi_notas()
    {
        return $this->hasMany('App\Bi_nota');
    }

    public function tri_notas()
    {
        return $this->hasMany('App\Tri_nota');
    }

    public function aulas()
    {
        return $this->belongsToMany('App\Aula','materia_aula','materia_idMateria','aula_idAula');
    }
}
