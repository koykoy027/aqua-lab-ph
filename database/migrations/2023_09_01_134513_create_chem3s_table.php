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
        Schema::create('chem3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('analysis_id')->constrained('analysis_requests', 'analysis_id');
            $table->foreignId('test_parameters_id')->constrained('library_test_parameters');
            $table->integer('chem3_initial_wt_of_evaporating_dish_replicate_1')->nullable();
            $table->integer('chem3_final_wt_of_evaporating_dish_replicate_1')->nullable();
            $table->integer('chem3_wt_of_residue_replicate_1')->nullable();
            $table->integer('chem3_initial_wt_of_evaporating_dish_replicate_2')->nullable();
            $table->integer('chem3_final_wt_of_evaporating_dish_replicate_2')->nullable();
            $table->integer('chem3_wt_of_residue_replicate_2')->nullable();
            $table->string('chem3_average_wt_of_residue')->nullable();
            $table->integer('chem3_final_result')->nullable();
            $table->string('chem3_final_result_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chem3s');
    }
};
