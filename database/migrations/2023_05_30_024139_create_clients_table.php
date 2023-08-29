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
            $table->id('account_number');
            $table->string('client_id');
            $table->string('account_name');
            $table->string('name_of_owner');
            $table->string('type_of_ownership');
            $table->string('name_of_authorized_person');
            $table->string('unit_no_floor_bldg_name');
            $table->string('street_name_or_subdivision');
            $table->string('barangay_name');
            $table->string('municipality_or_city');
            $table->string('zip_code')->nullable();
            $table->string('region');
            $table->string('province');
            $table->string('telephone')->nullable();
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('contact_person1_name')->nullable();
            $table->string('contact_person1_contact')->nullable();
            $table->string('contact_person1_email')->nullable();
            $table->string('contact_person2_name')->nullable();
            $table->string('contact_person2_contact')->nullable();
            $table->string('contact_person2_email')->nullable();
            $table->string('fsr_assigned');
            $table->string('market_segment')->nullable();
            $table->string('market_segment_others')->nullable();
            $table->string('no_of_microbiology_samples');
            $table->string('sample_collection_frequency_micro');
            $table->string('no_of_physico_chemical_samples');
            $table->string('sample_collection_frequency_pchem');
            $table->string('assigned_week');
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