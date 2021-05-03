<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{

    public function utlisateur(){
        return $this->hasMany('App\Utlisateur');
   }
}
