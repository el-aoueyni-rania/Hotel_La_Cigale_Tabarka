<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bienetre extends Model
{
    protected $primarykey ="B_id";
    public $incrementing = false ;


    //relation hasMany to Users
        //public function users(){
        //    return $this->HasMany('App\User');
        //}
}
