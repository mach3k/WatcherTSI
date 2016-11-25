<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restricao extends Model
{
   
   public function recurso()
   {
      return $this->belongsTo('App\Recurso');
   }
}
