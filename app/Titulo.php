<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    //
   
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
