<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('verified')->nullable();
            $table->string('rememberToken');
            $table->string('image_path')->default('profile.png');
            $table->string('status')->default('active');
            $table->string('phone')->nullable();
            $table->string('speciality')->nullable();
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable();
            $table->unsignedInteger('section_id');
            $table->foreign('section_id')->references('id')->on('doctor_section');
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
        Schema::dropIfExists('doctor');
    }
}
