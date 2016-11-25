<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
   
   public function user()
   {
      return $this->belongsTo('App\User');
   }
   
   public function recurso()
   {
      return $this->belongsTo('App\Recurso');
   }
}
