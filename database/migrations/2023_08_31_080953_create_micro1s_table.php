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
        Schema::create('micro1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('analysis_id')->constrained('analysis_requests', 'analysis_id');
            $table->foreignId('test_parameters_id')->constrained('library_test_parameters');
            $table->integer('micr1_hpc_plate_a')->nullable();
            $table->integer('micr1_hpc_plate_b')->nullable();
            $table->integer('micr1_hpc_average')->nullable();
            $table->integer('micr1_hpc_difference')->nullable();
            $table->string('micr1_hpc_final_result', '50')->nullable();
            $table->string('micr1_hpc_remarks', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('micro1s');
    }
};