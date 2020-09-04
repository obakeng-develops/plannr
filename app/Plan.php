<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function guest(){
        return $this->hasMany('App\Guest');
    }

    public function activity(){
        return $this->hasMany('App\Activity');
    }
}
