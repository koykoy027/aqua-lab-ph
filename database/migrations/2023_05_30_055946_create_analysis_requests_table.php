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
            $table->foreign('account_number')->references('account_number')->on('clients'); // connect in Client Account ID
            $table->string('collector_name')->nullable();
            $table->date('date_collected')->nullable();
            $table->date('date_next_schedule')->nullable();
            $table->string('time_collected')->nullable();
            $table->string('collection_point')->nullable();
            $table->string('collection_point_others')->nullable();
            $table->string('sampling_location_address')->nullable();
            $table->string('sampling_location_address_others')->nullable();
            $table->string('uvlight')->nullable();
            $table->string('chlorinator')->nullable();
            // $table->string('faucet_condition')->nullable();
            $table->string('source_of_water_sample')->nullable();
            $table->string('source_of_water_sample_others')->nullable();
            $table->string('type_of_water')->nullable();
            $table->string('type_of_water_others')->nullable();
            $table->string('water_purpose')->nullable();
            $table->string('water_purpose_others')->nullable();
            $table->string('test_parameters')->nullable()->comment('micro | phy | chem');
            $table->string('test_parameters_code')->nullable()->comment('specific test parameters');
            // $table->string('remarks');
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