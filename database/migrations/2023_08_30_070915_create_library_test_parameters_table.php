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
        Schema::create('library_test_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('parameter');
            $table->string('abbreviation');
            $table->string('method');
            $table->string('limit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_test_parameters');
    }
};