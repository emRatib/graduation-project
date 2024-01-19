<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('website_logo');
            $table->string('website_favicon');
            $table->string('website_email');
            $table->string('website_phone');
            $table->string('website_address');
            $table->string('website_facebook');
            $table->string('website_twitter');
            $table->string('website_instagram');
            $table->string('website_youtube');
            $table->string('website_whatsapp');
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
        Schema::dropIfExists('website_settings');
    }
}
