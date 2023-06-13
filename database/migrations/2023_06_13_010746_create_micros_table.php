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
        Schema::create('micros', function (Blueprint $table) {
            $table->id();
            $table->string('analysis_id'); // reference primary id of analysis_request table

            // micro 1
            $table->string('micr1_hpc_plate_a')->nullable();
            $table->string('micr1_hpc_plate_b')->nullable();
            $table->string('micr1_hpc_average')->nullable();
            $table->string('micr1_hpc_difference')->nullable();
            $table->string('micr1_hpc_final_result')->nullable();
            $table->string('micr1_hpc_remarks')->nullable();

            // micro 2
            $table->string('micr2_tc_24')->nullable();
            $table->string('micr2_tc_48')->nullable();
            $table->string('micr2_tc_final_result')->nullable();
            $table->string('micr2_tc_remarks')->nullable();

            //  micro 3
            $table->string('micr3_lauryl_24')->nullable();
            $table->string('micr3_lauryl_48')->nullable();
            $table->string('micr3_brillant_24')->nullable();
            $table->string('micr3_brillant_48')->nullable();
            $table->string('micr3_final_result')->nullable();
            $table->string('micr3_remarks')->nullable();

            // micro 4
            $table->string('micr4_color_of_the_sample')->nullable();
            $table->string('micr4_fluorescence')->nullable();
            $table->string('micr4_final_result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('micros');
    }
};
