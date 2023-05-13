<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->string('logo')->nullable();
            $table->string('office_hour')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('company_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }  
}
