<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDiabetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('patient_diabetes', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_data_id');
            $table->string('diabetes_type');
            $table->string('diabetes_duration');
            $table->string('diabetes_status');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_diabetes');
    }
}
