<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
