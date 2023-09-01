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
        Schema::create('chem10s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('analysis_id')->constrained('analysis_requests', 'analysis_id');
            $table->foreignId('test_parameters_id')->constrained('library_test_parameters');
            $table->integer('chem10_instrument_reading_1')->nullable();
            $table->integer('chem10_instrument_reading_2')->nullable();
            $table->integer('chem10_instrument_reading_3')->nullable();
            $table->integer('chem10_average_instrument_reading')->nullable();
            $table->integer('chem10_final_result')->nullable();
            $table->string('chem10_final_result_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chem10s');
    }
};
