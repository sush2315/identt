<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('MiddleName');
            $table->string('Email');
            $table->string('Mobile');
            $table->string('Alternate');
            $table->string('PermanentAddress');
            $table->string('CurrentAddress');
            $table->string('State');
            $table->string('City');
            $table->string('Country');
            $table->string('Pincode');
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
        Schema::dropIfExists('academic');
    }
}
