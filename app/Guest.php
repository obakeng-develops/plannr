<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = [];

    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
