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
        Schema::create('raw_datas', function (Blueprint $table) {
            $table->id();
            $table->string('analysis_id'); // reference primary id of analysis_request table

            // micro 1
            $table->string('micr1_hpc_plate_a', 20)->nullable();
            $table->string('micr1_hpc_plate_b', 20)->nullable();
            $table->string('micr1_hpc_average', 20)->nullable();
            $table->string('micr1_hpc_difference', 20)->nullable();
            $table->string('micr1_hpc_final_result', 20)->nullable();
            $table->string('micr1_hpc_remarks', 20)->nullable();

            // micro 2
            $table->string('micr2_tc_24', 20)->nullable();
            $table->string('micr2_tc_48', 20)->nullable();
            $table->string('micr2_tc_final_result', 20)->nullable();
            $table->string('micr2_tc_remarks', 20)->nullable();

            //  micro 3
            $table->string('micr3_lauryl_24', 20)->nullable();
            $table->string('micr3_lauryl_48', 20)->nullable();
            $table->string('micr3_brillant_24', 20)->nullable();
            $table->string('micr3_brillant_48', 20)->nullable();
            $table->string('micr3_final_result', 20)->nullable();
            $table->string('micr3_remarks', 20)->nullable();

            // micro 4
            $table->string('micr4_color_of_the_sample', 20)->nullable();
            $table->string('micr4_fluorescence', 20)->nullable();
            $table->string('micr4_final_result', 20)->nullable();

            //chem 1
            $table->string('chem1_instrument_reading_1', 20)->nullable();
            $table->string('chem1_instrument_reading_2', 20)->nullable();
            $table->string('chem1_instrument_reading_3', 20)->nullable();
            $table->string('chem1_average_instrument_reading', 20)->nullable();
            $table->string('chem1_final_result', 20)->nullable();
            $table->string('chem1_final_result_remarks', 20)->nullable();

            //chem 2
            $table->string('chem2_instrument_reading_1', 20)->nullable();
            $table->string('chem2_instrument_reading_2', 20)->nullable();
            $table->string('chem2_instrument_reading_3', 20)->nullable();
            $table->string('chem2_average_instrument_reading', 20)->nullable();
            $table->string('chem2_final_result', 20)->nullable();
            $table->string('chem2_final_result_remarks', 20)->nullable();

            //chem 3
            $table->string('chem3_initial_wt_of_evaporating_dish_replicate_1', 20)->nullable();
            $table->string('chem3_final_wt_of_evaporating_dish_replicate_1', 20)->nullable();
            $table->string('chem3_wt_of_residue_replicate_1', 20)->nullable();
            $table->string('chem3_initial_wt_of_evaporating_dish_replicate_2', 20)->nullable();
            $table->string('chem3_final_wt_of_evaporating_dish_replicate_2', 20)->nullable();
            $table->string('chem3_wt_of_residue_replicate_2', 20)->nullable();
            $table->string('chem3_average_wt_of_residue', 20)->nullable();
            $table->string('chem3_final_result', 20)->nullable();
            $table->string('chem3_final_result_remarks', 20)->nullable();

            //chem 4
            $table->string('chem4_instrument_reading', 20)->nullable();
            $table->string('chem4_final_result', 20)->nullable();
            $table->string('chem4_final_result_remarks', 20)->nullable();

            //chem 5
            $table->string('chem5_instrument_reading_1', 20)->nullable();
            $table->string('chem5_instrument_reading_2', 20)->nullable();
            $table->string('chem5_instrument_reading_3', 20)->nullable();
            $table->string('chem5_average_instrument_reading', 20)->nullable();
            $table->string('chem5_final_result', 20)->nullable();
            $table->string('chem5_final_result_remarks', 20)->nullable();

            //chem 6
            $table->string('chem6_instrument_reading_1', 20)->nullable();
            $table->string('chem6_instrument_reading_2', 20)->nullable();
            $table->string('chem6_instrument_reading_3', 20)->nullable();
            $table->string('chem6_average_instrument_reading', 20)->nullable();
            $table->string('chem6_final_result', 20)->nullable();
            $table->string('chem6_final_result_remarks', 20)->nullable();

            //chem 7
            $table->string('chem7_instrument_reading_1', 20)->nullable();
            $table->string('chem7_instrument_reading_2', 20)->nullable();
            $table->string('chem7_instrument_reading_3', 20)->nullable();
            $table->string('chem7_average_instrument_reading', 20)->nullable();
            $table->string('chem7_final_result', 20)->nullable();
            $table->string('chem7_final_result_remarks', 20)->nullable();

            //chem 9
            $table->string('chem9_instrument_reading_1', 20)->nullable();
            $table->string('chem9_instrument_reading_2', 20)->nullable();
            $table->string('chem9_instrument_reading_3', 20)->nullable();
            $table->string('chem9_average_instrument_reading', 20)->nullable();
            $table->string('chem9_final_result', 20)->nullable();
            $table->string('chem9_final_result_remarks', 20)->nullable();

            //chem 10
            $table->string('chem10_instrument_reading_1', 20)->nullable();
            $table->string('chem10_instrument_reading_2', 20)->nullable();
            $table->string('chem10_instrument_reading_3', 20)->nullable();
            $table->string('chem10_average_instrument_reading', 20)->nullable();
            $table->string('chem10_final_result', 20)->nullable();
            $table->string('chem10_final_result_remarks', 20)->nullable();

            //phys 1
            $table->string('phys1_observation', 20)->nullable();
            $table->string('phys1_final_result', 20)->nullable();
            $table->string('phys1_final_result_remarks', 20)->nullable();

            //phys 2
            $table->string('phys2_observation', 20)->nullable();
            $table->string('phys2_final_result', 20)->nullable();
            $table->string('phys2_final_result_remarks', 20)->nullable();

            //phys 3
            $table->string('phys3_concentration_of_comparable_color_standard', 20)->nullable();
            $table->string('phys3_final_result', 20)->nullable();
            $table->string('phys3_final_result_remarks', 20)->nullable();

            //phys 4
            $table->string('phys4_instrument_reading_1', 20)->nullable();
            $table->string('phys4_instrument_reading_2', 20)->nullable();
            $table->string('phys4_instrument_reading_3', 20)->nullable();
            $table->string('phys4_average_instrument_reading', 20)->nullable();
            $table->string('phys4_final_result', 20)->nullable();
            $table->string('phys4_final_result_remarks', 20)->nullable();

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
