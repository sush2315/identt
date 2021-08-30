<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical', function (Blueprint $table) {
            $table->id();
            $table->string('Certificate');
            $table->string('Organization');
            $table->string('CredentialID');
            $table->timestamps('Issued');
            $table->timestamps('Expiration');
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
        Schema::dropIfExists('technical');
    }
}
