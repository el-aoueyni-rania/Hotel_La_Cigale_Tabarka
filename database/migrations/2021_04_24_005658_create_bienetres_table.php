<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienetresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienetres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vesitaires_salle_de_sport',15);
            $table->enum('coach_sportif_personelle',['x','y','z','w','d']);
            $table->enum('cours_de_fitness',['10','12','Vendredi']);
            $table->enum('cours_de_yoga',['13','15','Vendredi','Dimanche']);
            $table->enum('Fitness',['10','11:30','Dimanche']);
            $table->enum('Fauteuil_massant',['10','11:30','16','17','Lundi']);
            $table->enum('Forfaits_spa_bien_etre',['14','15:30','Mardi']);
            $table->enum('bain_de_pieds',['19','20:30','Tous_les_jours']);
            $table->enum('Soins_du_visage',['14','15:30','18','19:45','Mercredi']);
            $table->enum('Massages',['10','15:30','Tous_les_jours']);
            $table->enum('Hammam',['19','23:45','Tous_les_jours']);
            $table->enum('sauna',['9','15:30','jeudi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bienetres');
    }
}
