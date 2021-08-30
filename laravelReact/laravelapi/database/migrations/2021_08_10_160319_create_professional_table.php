<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional', function (Blueprint $table) {
            $table->id();
            $table->string('CompanyName');
            $table->string('url');
            $table->string('CurrentDesignation');
            $table->string('Annual');
            $table->string('Notice');
            $table->string('Majorrole');
            $table->string('Skills');
            $table->string('Industry');
            $table->string('Functional');
            $table->string('Designation');
            $table->string('PreviousDesignation');
            $table->string('PreviousCompany');
            $table->string('Performance');
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
        Schema::dropIfExists('professional');
    }
}
