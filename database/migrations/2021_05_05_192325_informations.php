<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('information',function(Blueprint $table){
                $table->increments('id');
                 $table->string('role');
                 $table->string('company_name');
                 $table->longText('description');
                 $table->integer('phone');
                 $table->integer('age');
                 $table->string('address');
                 $table->string('sex');
                 $table->string('qualification');
                 $table->timestamps();
                 $table->unsignedBigInteger('user_id');
                 $table->foreign('user_id')->references('id')->on('users');

             });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
