<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembermstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membermsts', function (Blueprint $table) {
            $table->id();
            $table->string('membername');
            $table->string('password');
            $table->text('address');
            $table->string('city');
            $table->integer('pincode');
            $table->string('contactno');
            $table->string('email');
            $table->integer('membershipid');
            $table->foreign('membershipid')->references('id')->on('membershipmsts');
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
        Schema::dropIfExists('membermsts');
    }
}
