<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('analysis_requests', function (Blueprint $table) {
            $table->id('analysis_id');
            $table->unsignedBigInteger('account_number');
            $table->foreign('account_number')->references('account_number')->on('clients'); // connect in clients account number
            $table->string('collector_name');
            $table->string('date_collected');
            $table->string('time_collected');
            $table->string('collection_point');
            $table->string('collection_point_others')->nullable();
            $table->string('sampling_location_address');
            $table->string('sampling_location_address_others')->nullable();
            $table->string('uvlight');
            $table->string('chlorinator');
            $table->string('faucet_condition');
            $table->string('source_of_water_sample');
            $table->string('source_of_water_sample_others')->nullable();
            $table->string('water_purpose');
            $table->string('water_purpose_others')->nullable();
            $table->string('test_parameters');
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analysis_requests');
    }
};