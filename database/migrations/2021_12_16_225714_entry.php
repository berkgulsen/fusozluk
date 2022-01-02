<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entry extends Migration
{
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('title_id');
            $table->unsignedBigInteger('user_id');
            $table->longText('content');
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('titles');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('entries', function(Blueprint $table) {
            //

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('entries');
    }
}
