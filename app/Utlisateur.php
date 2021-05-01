<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utlisateur extends Model
{
    //relation belongs to Bienetre table
    public function bienetre(){
        return $this->belongsTo('App\Bienetre');
    }
<<<<<<< HEAD
    public function reservations(){
        return $this->hasMany('App\Reservation');
    }
=======

     public function reservations(){
         return $this->hasMany('App\Reservation');
     }

     // relation one to many between restauration and utilisateur
     public function restaurations()
    {
        return $this->hasMany('App\Restauration');
    }

>>>>>>> 20d46c160b21508a3fd135d1e36933c9481107bf
}
