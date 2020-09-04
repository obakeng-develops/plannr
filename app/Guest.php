<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
