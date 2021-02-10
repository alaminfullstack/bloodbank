<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('contact_number');
            $table->string('alt_contact_number')->nullable();
            $table->unsignedBigInteger('present_country_id');
            $table->unsignedBigInteger('present_state_id');
            $table->unsignedBigInteger('present_city_id');
            $table->string('present_address');
            $table->unsignedBigInteger('permanent_country_id');
            $table->unsignedBigInteger('permanent_state_id');
            $table->unsignedBigInteger('permanent_city_id');
            $table->string('permanent_address');
            $table->date('date_of_birth');
            $table->tinyInteger('gender')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('approved')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('user_profiles');
    }
}
