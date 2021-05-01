<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    public function utlisateur(){
        return $this->hasManyphp('App\Utlisateur');
   }
}
