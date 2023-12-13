<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventmstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventmsts', function (Blueprint $table) {
            $table->id();
            $table->string('eventname');
            $table->date('fromdate');
            $table->date('todate');
            $table->time('starttime');
            $table->time('endtime');
            $table->integer('charges');
            $table->text('description');
            $table->text('photo');
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
        Schema::dropIfExists('eventmsts');
    }
}
