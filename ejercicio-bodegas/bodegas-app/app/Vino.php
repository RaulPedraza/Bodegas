<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    public function vino()
    {
        return $this->belongsTo('App\Bodega');
    }
}
