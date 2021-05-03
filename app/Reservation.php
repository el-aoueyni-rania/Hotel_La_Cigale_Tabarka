<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //Relation Belongs to bientre table
        public function bienetre(){
            return $this->belongsTo('App\Bienetre');
        }
<<<<<<< HEAD
        public function utlisateur(){
            return $this->belongsTo('App\Utlisateur');
        }
=======


        public function utilisateur(){
            return $this->belongsTo('App\Utilisateur');
        }

>>>>>>> eaff1b5e63c43165a4e9c6e35254697188206d22
}
