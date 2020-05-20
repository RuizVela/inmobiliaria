<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propietario extends Model
{
    public function viviendas()
    {
        return $this->belongsToMany('App\vivienda');
    }
}
