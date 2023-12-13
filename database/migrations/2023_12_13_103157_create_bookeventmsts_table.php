<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookeventmstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookeventmsts', function (Blueprint $table) {
            $table->id();
            $table->integer('eventid');
            $table->foreign('eventid')->references('id')->on('eventmsts');
            $table->integer('memberid');
            $table->foreign('memberid')->references('id')->on('membermst');
            $table->integer('noofmember');
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
        Schema::dropIfExists('bookeventmsts');
    }
}
