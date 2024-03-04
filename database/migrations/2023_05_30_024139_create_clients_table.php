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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('account_number')->nullable();
            $table->string('client_id')->nullable();
            $table->string('account_name')->nullable();
            $table->string('name_of_owner')->nullable();
            $table->string('type_of_ownership')->nullable();
            $table->string('name_of_authorized_person')->nullable();
            $table->string('unit_no_floor_bldg_name')->nullable();
            $table->string('street_name_or_subdivision')->nullable();
            $table->string('barangay_name')->nullable();
            $table->string('municipality_or_city')->nullable();
            $table->string('zip_code')->nullable()->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('telephone')->nullable()->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable()->nullable();
            $table->string('contact_person1_name')->nullable()->nullable();
            $table->string('contact_person1_contact')->nullable()->nullable();
            $table->string('contact_person1_email')->nullable()->nullable();
            $table->string('contact_person2_name')->nullable()->nullable();
            $table->string('contact_person2_contact')->nullable()->nullable();
            $table->string('contact_person2_email')->nullable()->nullable();
            $table->string('fsr_assigned')->nullable();
            $table->string('market_segment')->nullable()->nullable();
            $table->string('market_segment_others')->nullable()->nullable();
            $table->string('no_of_microbiology_samples')->nullable();
            $table->string('sample_collection_frequency_micro')->nullable();
            $table->string('no_of_physico_chemical_samples')->nullable();
            $table->string('sample_collection_frequency_pchem')->nullable();
            $table->string('assigned_week')->nullable();
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_controllers');
    }
};