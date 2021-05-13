<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_restaurant' , 30);
            $table->string('menu');
            $table->string('fruits');
            $table->string('boissons');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurations');
    }
}
