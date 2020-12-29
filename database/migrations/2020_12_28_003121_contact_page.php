<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ContactPage', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('title');
            $table->string('phoneText');
            $table->string('emailText');
            $table->string('locationText');
            $table->string('phone');
            $table->string('mail');
            $table->longText('content');
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
        Schema::dropIfExists('ContactPage');
    }
}
