<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialconnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialconnection', function (Blueprint $table) {
            $table->id();
            $table->string('Facebook');
            $table->string('FacebookID');
            $table->string('LinkedinID');
            $table->string('Linkedinurl');
            $table->string('Blog');
            $table->string('Work');
            $table->string('Github');
            $table->string('Linkedin');
            $table->string('Other');
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
        Schema::dropIfExists('socialconnection');
    }
}
