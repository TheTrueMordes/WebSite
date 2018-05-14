<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGreetingsTable extends Migrations
{
    public function up()
    {
        Schema::create('greetings',function(Blueprint $table)
        {
          $table->increments('id');
          $table->string('body');
          $table->timestamp();
        });
    }

    public function down()
    {
        Schema::drop('greetings');
    }
}
