<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
   
   public function historico()
   {
      return $this->hasMany('App\Historico');
   }
   
   public function restricoes()
   {
      return $this->hasMany('App\Restricao');
   }
}
