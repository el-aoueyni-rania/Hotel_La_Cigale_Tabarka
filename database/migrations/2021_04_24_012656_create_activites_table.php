<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Nom_activités',100);
            $table->date('Date_activités');
            $table->dateTime('Temps_activités');
            $table->integer('id_utilisateur')->unsigned();
            $table->timestamps();
            $table->foreign('id_utilisateur')->references('id')->on('utlisateurs')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activites');
    }
}
