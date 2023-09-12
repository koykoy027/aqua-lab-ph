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
        Schema::create('phys3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('analysis_id')->constrained('analysis_requests', 'analysis_id');
            $table->foreignId('test_parameters_id')->constrained('library_test_parameters');
            $table->string('phys3_concentration_of_comparable_color_standard')->nullable();
            $table->string('phys3_final_result')->nullable();
            $table->string('phys3_final_result_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phys3s');
    }
};