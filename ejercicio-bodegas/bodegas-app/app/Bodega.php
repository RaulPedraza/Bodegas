<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    public function bodega()
    {
        return $this->hasMany('App\Vino');
    }
}
