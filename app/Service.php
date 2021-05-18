<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Service extends Model
{

    protected $guarded =[];
   public function user(){
       return $this->hasMany('App\User');
   }


}
