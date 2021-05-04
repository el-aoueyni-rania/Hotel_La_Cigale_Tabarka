<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Service extends Model
{

   public function utilisateur(){
       return $this->hasMany('App\Utlisateur');
   }


}
