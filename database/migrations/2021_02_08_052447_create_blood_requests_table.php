<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_user_id');
            $table->unsignedBigInteger('to_user_id');
            $table->unsignedBigInteger('blood_group_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->string('primary_contact_number')->nullable();
            $table->string('optional_contact_number')->nullable();
            $table->string('blood_need_date');
            $table->string('blood_need_time');
            $table->string('message')->nullable();
            $table->string('note')->nullable();
            $table->integer('status')->default(0);
            $table->integer('approved')->default(0);
            $table->integer('view_count')->default(0);
            $table->softDeletes();
            $table->timestamps();

            // $table->foreign('state_id')->references('id')->on('states');
            // $table->foreign('city_id')->references('id')->on('cities');
            // $table->foreign('country_id')->references('id')->on('countries');
            // $table->foreign('blood_group_id')->references('id')->on('blood_groups');
            // $table->foreign('to_user_id')->references('id')->on('users');
            // $table->foreign('from_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
}
