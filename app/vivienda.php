<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vivienda extends Model
{
    public function propietario()
    {
        return $this->belongsTo('App\propietario');
    }
}
