<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    public function adviser(){
        return $this->belongsTo('App\User','user_id', 'id');
    }

    public function answers(){
        return $this->hasMany('App\SetAnswer','set_id', 'id');
    }
}
