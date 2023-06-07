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
        Schema::create('lab_acceptance', function (Blueprint $table) {
            $table->id();
            $table->string('analysis_id');
            $table->string('evaluated_by');
            $table->string('date_evaluated');
            $table->string('time_evaluated');
            $table->string('sample_condition');
            $table->string('remarks');
            $table->string('if_remarks_are_rejected')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_acceptance');
    }
};