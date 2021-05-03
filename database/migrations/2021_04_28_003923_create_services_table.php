<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',50);
            $table->string('type',50);
            $table->timestamps();
<<<<<<< HEAD
            $table->integer('utlisateur_id')->unsigned();
            $table->foreign('utlisateur_id')->references('id')->on('utlisateurs')->onDelete('restrict')->onUpdate('restrict');
=======
>>>>>>> eaff1b5e63c43165a4e9c6e35254697188206d22
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
