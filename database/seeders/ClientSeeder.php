<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Client::create([
            'account_name' => 'Water Test Company 1',
            'business_tin' => $faker->randomNumber(9),
            'name_of_owner' => $faker->name,
            'type_of_ownership' => 'Single Prorietorship',
            'name_of_authorized_person' => $faker->name,
            'unit_no_floor_bldg_name' => $faker->secondaryAddress,
            'street_name_or_subdivision' => $faker->streetName,
            'barangay_name' => $faker->word,
            'municipality_or_city' => $faker->city,
            'zip_code' => $faker->postcode,
            'province' => $faker->state,
            'telephone' => $faker->phoneNumber,
            'mobile' => $faker->phoneNumber,
            'email' => $faker->email,
            'fsr_assigned' => $faker->name,
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);

        Client::create([
            'account_name' => 'Water Test Company 2',
            'business_tin' => $faker->randomNumber(9),
            'name_of_owner' => $faker->name,
            'type_of_ownership' => 'Partnership',
            'name_of_authorized_person' => $faker->name,
            'unit_no_floor_bldg_name' => $faker->secondaryAddress,
            'street_name_or_subdivision' => $faker->streetName,
            'barangay_name' => $faker->word,
            'municipality_or_city' => $faker->city,
            'zip_code' => $faker->postcode,
            'province' => $faker->state,
            'telephone' => $faker->phoneNumber,
            'mobile' => $faker->phoneNumber,
            'email' => $faker->email,
            'fsr_assigned' => $faker->name,
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);

        Client::create([
            'account_name' => 'Water Test Company 3',
            'business_tin' => $faker->randomNumber(9),
            'name_of_owner' => $faker->name,
            'type_of_ownership' => 'Cooperative',
            'name_of_authorized_person' => $faker->name,
            'unit_no_floor_bldg_name' => $faker->secondaryAddress,
            'street_name_or_subdivision' => $faker->streetName,
            'barangay_name' => $faker->word,
            'municipality_or_city' => $faker->city,
            'zip_code' => $faker->postcode,
            'province' => $faker->state,
            'telephone' => $faker->phoneNumber,
            'mobile' => $faker->phoneNumber,
            'email' => $faker->email,
            'fsr_assigned' => $faker->name,
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);
        Client::create([
            'account_name' => 'Water Test Company 4',
            'business_tin' => $faker->randomNumber(9),
            'name_of_owner' => $faker->name,
            'type_of_ownership' => 'Corporation',
            'name_of_authorized_person' => $faker->name,
            'unit_no_floor_bldg_name' => $faker->secondaryAddress,
            'street_name_or_subdivision' => $faker->streetName,
            'barangay_name' => $faker->word,
            'municipality_or_city' => $faker->city,
            'zip_code' => $faker->postcode,
            'province' => $faker->state,
            'telephone' => $faker->phoneNumber,
            'mobile' => $faker->phoneNumber,
            'email' => $faker->email,
            'fsr_assigned' => $faker->name,
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => $faker->numberBetween(1, 1000),
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);
    }
}