<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('doctor_appointment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctors_id');
            $table->foreign('doctors_id')->references('id')->on('doctor');
            $table->string('appointment_date');
            $table->string('appointment_time');
            $table->string('appointment_status')->default('enable');
            $table->string('appointment_type');
            $table->string('appointment_reason');
            $table->string('appointment_description');
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
        Schema::dropIfExists('doctor_appointment');
    }
}
