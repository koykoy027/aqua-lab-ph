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
        Schema::create('micro3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('analysis_id')->constrained('analysis_requests', 'analysis_id');
            $table->foreignId('test_parameters_id')->constrained('library_test_parameters');
            $table->integer('micr3_lauryl_24')->nullable();
            $table->integer('micr3_lauryl_48')->nullable();
            $table->integer('micr3_brillant_24')->nullable();
            $table->integer('micr3_brillant_48')->nullable();
            $table->string('micr3_final_result')->nullable();
            $table->string('micr3_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('micro3s');
    }
};
