<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomchargesmstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomchargesmsts', function (Blueprint $table) {
            $table->id();
            $table->string('roomtype');
            $table->integer('charges');
            $table->integer('noofrooms');
            $table->text('description');
            $table->text('photo1');
            $table->text('photo2');
            $table->text('photo3');
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
        Schema::dropIfExists('roomchargesmsts');
    }
}
