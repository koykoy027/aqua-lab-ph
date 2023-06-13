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
        Schema::create('chems', function (Blueprint $table) {
            $table->id();
            $table->string('analysis_id'); // reference primary id of analysis_request table

            //chem 1
            $table->string('chem1_instrument_reading_1')->nullable();
            $table->string('chem1_instrument_reading_2')->nullable();
            $table->string('chem1_instrument_reading_3')->nullable();
            $table->string('chem1_average_instrument_reading')->nullable();
            $table->string('chem1_final_result')->nullable();
            $table->string('chem1_final_result_remarks')->nullable();

            //chem 2
            $table->string('chem2_instrument_reading_1')->nullable();
            $table->string('chem2_instrument_reading_2')->nullable();
            $table->string('chem2_instrument_reading_3')->nullable();
            $table->string('chem2_average_instrument_reading')->nullable();
            $table->string('chem2_final_result')->nullable();
            $table->string('chem2_final_result_remarks')->nullable();

            //chem 3
            $table->string('chem3_initial_wt_of_evaporating_dish_replicate_1')->nullable();
            $table->string('chem3_final_wt_of_evaporating_dish_replicate_1')->nullable();
            $table->string('chem3_wt_of_residue_replicate_1')->nullable();
            $table->string('chem3_initial_wt_of_evaporating_dish_replicate_2')->nullable();
            $table->string('chem3_final_wt_of_evaporating_dish_replicate_2')->nullable();
            $table->string('chem3_wt_of_residue_replicate_2')->nullable();
            $table->string('chem3_average_wt_of_residue')->nullable();
            $table->string('chem3_final_result')->nullable();
            $table->string('chem3_final_result_remarks')->nullable();

            //chem 4
            $table->string('chem4_instrument_reading')->nullable();
            $table->string('chem4_final_result')->nullable();
            $table->string('chem4_final_result_remarks')->nullable();

            //chem 5
            $table->string('chem5_instrument_reading_1')->nullable();
            $table->string('chem5_instrument_reading_2')->nullable();
            $table->string('chem5_instrument_reading_3')->nullable();
            $table->string('chem5_average_instrument_reading')->nullable();
            $table->string('chem5_final_result')->nullable();
            $table->string('chem5_final_result_remarks')->nullable();

            //chem 6
            $table->string('chem6_instrument_reading_1')->nullable();
            $table->string('chem6_instrument_reading_2')->nullable();
            $table->string('chem6_instrument_reading_3')->nullable();
            $table->string('chem6_average_instrument_reading')->nullable();
            $table->string('chem6_final_result')->nullable();
            $table->string('chem6_final_result_remarks')->nullable();

            //chem 7
            $table->string('chem7_instrument_reading_1')->nullable();
            $table->string('chem7_instrument_reading_2')->nullable();
            $table->string('chem7_instrument_reading_3')->nullable();
            $table->string('chem7_average_instrument_reading')->nullable();
            $table->string('chem7_final_result')->nullable();
            $table->string('chem7_final_result_remarks')->nullable();

            //chem 9
            $table->string('chem9_instrument_reading_1')->nullable();
            $table->string('chem9_instrument_reading_2')->nullable();
            $table->string('chem9_instrument_reading_3')->nullable();
            $table->string('chem9_average_instrument_reading')->nullable();
            $table->string('chem9_final_result')->nullable();
            $table->string('chem9_final_result_remarks')->nullable();

            //chem 10
            $table->string('chem10_instrument_reading_1')->nullable();
            $table->string('chem10_instrument_reading_2')->nullable();
            $table->string('chem10_instrument_reading_3')->nullable();
            $table->string('chem10_average_instrument_reading')->nullable();
            $table->string('chem10_final_result')->nullable();
            $table->string('chem10_final_result_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chems');
    }
};
