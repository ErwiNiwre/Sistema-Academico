<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    public function postulantes()
    {
        return $this->belongsTo('App\Postulante');
    }
}
