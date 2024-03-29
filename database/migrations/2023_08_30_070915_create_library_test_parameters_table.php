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
            $table->string('type')->nullable();
            $table->string('parameter')->nullable();
            $table->string('service')->nullable();
            $table->string('method')->nullable();
            $table->string('limit')->nullable();
            $table->string('filename')->nullable();
            $table->integer('sequence')->nullable();
            $table->boolean('is_show')->nullable()->comment('if show in analysis request dropdown');
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
