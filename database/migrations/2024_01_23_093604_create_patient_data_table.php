<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('gender');
            $table->string('age');
            $table->string('hypertension');
            $table->string('heart_disease');
            $table->string('smoking_history');
            $table->string('bmi');
            $table->string('HbA1c_level');
            $table->string('blood_glucose_level');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_data');
    }
};

// "gender": "Female",
// "age": 60.0,
// "hypertension": 1,
// "heart_disease": 0,
// "smoking_history": "never",
// "bmi": 28.5,
// "HbA1c_level": 7.0,
// "blood_glucose_level": 120
