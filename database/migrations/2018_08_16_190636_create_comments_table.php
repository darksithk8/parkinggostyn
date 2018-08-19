<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('comments', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id')->unsigned()->nullable();
           $table->string('user_name')->nullable();
           $table->string('value')->nullable();
           $table->timestamps();
       });
       Schema::table('comments', function ($table) {
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('user_name')->references('name')->on('users');

       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('comments');
   }
}