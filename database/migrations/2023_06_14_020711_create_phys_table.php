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
        Schema::create('phys', function (Blueprint $table) {
            $table->id();
            $table->string('analysis_id'); // reference primary id of analysis_request table

            //phys 1
            $table->string('phys1_observation')->nullable();
            $table->string('phys1_final_result')->nullable();
            $table->string('phys1_final_result_remarks')->nullable();

            //phys 2
            $table->string('phys2_observation')->nullable();
            $table->string('phys2_final_result')->nullable();
            $table->string('phys2_final_result_remarks')->nullable();

            //phys 3
            $table->string('phys3_concentration_of_comparable_color_standard')->nullable();
            $table->string('phys3_final_result')->nullable();
            $table->string('phys3_final_result_remarks')->nullable();

            //phys 4
            $table->string('phys4_instrument_reading_1')->nullable();
            $table->string('phys4_instrument_reading_2')->nullable();
            $table->string('phys4_instrument_reading_3')->nullable();
            $table->string('phys4_average_instrument_reading')->nullable();
            $table->string('phys4_final_result')->nullable();
            $table->string('phys4_final_result_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phys');
    }
};
