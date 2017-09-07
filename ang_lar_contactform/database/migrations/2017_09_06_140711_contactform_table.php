<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contactform', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->unique();
            $table->string('lastname')->unique();
            $table->string('email')->unique();
            $table->string('course');
            $table->string('message');
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
        //
        Schema::drop('contactform');
    }
}
