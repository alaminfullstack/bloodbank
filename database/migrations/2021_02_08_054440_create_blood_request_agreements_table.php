<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_request_agreements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blood_request_id');
            $table->unsignedBigInteger('blood_donar_id');
            $table->string('message')->nullable();
            $table->integer('approved')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('blood_request_id')->references('id')->on('blood_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_request_agreements');
    }
}
