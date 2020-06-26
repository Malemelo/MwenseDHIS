<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('sex');
            $table->string('dob');
            $table->bigInteger('village_id');
            $table->string('phone_number')->nullable();
            $table->string('landmark_location')->nullable();
            $table->string('next_of_keen')->nullable();
            $table->string('next_of_keen_relationship')->nullable();
            $table->string('next_of_keen_phone')->nullable();
            $table->bigInteger('health_worker_id')->nullable();
            $table->bigInteger('nearest_health_facility_id');
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
        Schema::dropIfExists('patients');
    }
}
