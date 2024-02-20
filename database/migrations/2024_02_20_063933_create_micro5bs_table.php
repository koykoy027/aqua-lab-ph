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
        Schema::create('micro5bs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('analysis_id')->constrained('analysis_requests', 'analysis_id');
            $table->foreignId('test_parameters_id')->constrained('library_test_parameters');
            $table->string('micr5_hpc_plate_a')->nullable();
            $table->string('micr5_hpc_plate_b')->nullable();
            $table->string('micr5_hpc_average')->nullable();
            $table->string('micr5_hpc_difference')->nullable();
            $table->string('micr5_hpc_final_result')->nullable();
            $table->string('micr5_hpc_remarks')->nullable();
            $table->string('micr5b_no_of_yellow_wells_rxn_after_18h')->nullable();
            $table->string('micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('micro5bs');
    }
};
