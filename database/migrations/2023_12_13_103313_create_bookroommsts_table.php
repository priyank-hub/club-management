<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookroommstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookroommsts', function (Blueprint $table) {
            $table->id();
            $table->integer('roomid');
            $table->foreign('roomid')->references('id')->on('roomchargesmsts');
            $table->integer('memberid');
            $table->foreign('memberid')->references('id')->on('membermst');
            $table->string('roomtype');
            $table->date('bookingdate');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('noofrooms');
            $table->integer('adults');
            $table->integer('children');
            $table->integer('infants');
            $table->string('status');
            $table->integer('extrabed');
            $table->string('extrafacility');
            $table->integer('extracharges');
            $table->integer('pdcharges');
            $table->integer('totalcharges');
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
        Schema::dropIfExists('bookroommsts');
    }
}
