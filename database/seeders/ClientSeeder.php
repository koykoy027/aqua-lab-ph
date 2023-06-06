<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'account_name' => 'Lois Kirkland',
            'business_tin' => 'business_tin',
            'name_of_owner' => 'Samuel Langley',
            'type_of_ownership' => 'Single Prorietorship',
            'name_of_authorized_person' => 'Mercedes Wise',
            'unit_no_floor_bldg_name' => 'Farrah Reyes',
            'street_name_or_subdivision' => 'Amos Irwin',
            'barangay_name' => 'Herrod Mueller',
            'municipality_or_city' => 'Omnis commodo tempor',
            'zip_code' => '85809',
            'province' => 'Ea eos deserunt ea o',
            'telephone' => '+1 (744) 121-6993',
            'mobile' => '+1 (391) 157-5373',
            'email' => 'jesuxoli@mailinator.com',
            'fsr_assigned' => 'Cupidatat sit sunt',
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => '979',
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => '345',
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);

        Client::create([
            'account_name' => 'Water Test Company 1',
            'business_tin' => 'business_tin',
            'name_of_owner' => 'Samuel Langley',
            'type_of_ownership' => 'Partnership',
            'name_of_authorized_person' => 'Mercedes Wise',
            'unit_no_floor_bldg_name' => 'Farrah Reyes',
            'street_name_or_subdivision' => 'Amos Irwin',
            'barangay_name' => 'Herrod Mueller',
            'municipality_or_city' => 'Omnis commodo tempor',
            'zip_code' => '85809',
            'province' => 'Ea eos deserunt ea o',
            'telephone' => '+1 (744) 121-6993',
            'mobile' => '+1 (391) 157-5373',
            'email' => 'jesuxoli@mailinator.com',
            'fsr_assigned' => 'Cupidatat sit sunt',
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => '979',
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => '345',
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);

        Client::create([
            'account_name' => 'Water Test Company 2',
            'business_tin' => 'business_tin',
            'name_of_owner' => 'Samuel Langley',
            'type_of_ownership' => 'Cooperative',
            'name_of_authorized_person' => 'Mercedes Wise',
            'unit_no_floor_bldg_name' => 'Farrah Reyes',
            'street_name_or_subdivision' => 'Amos Irwin',
            'barangay_name' => 'Herrod Mueller',
            'municipality_or_city' => 'Omnis commodo tempor',
            'zip_code' => '85809',
            'province' => 'Ea eos deserunt ea o',
            'telephone' => '+1 (744) 121-6993',
            'mobile' => '+1 (391) 157-5373',
            'email' => 'jesuxoli@mailinator.com',
            'fsr_assigned' => 'Cupidatat sit sunt',
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => '979',
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => '345',
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);

        Client::create([
            'account_name' => 'Water Test Company 3',
            'business_tin' => 'business_tin',
            'name_of_owner' => 'Samuel Langley',
            'type_of_ownership' => 'Corporation',
            'name_of_authorized_person' => 'Mercedes Wise',
            'unit_no_floor_bldg_name' => 'Farrah Reyes',
            'street_name_or_subdivision' => 'Amos Irwin',
            'barangay_name' => 'Herrod Mueller',
            'municipality_or_city' => 'Omnis commodo tempor',
            'zip_code' => '85809',
            'province' => 'Ea eos deserunt ea o',
            'telephone' => '+1 (744) 121-6993',
            'mobile' => '+1 (391) 157-5373',
            'email' => 'jesuxoli@mailinator.com',
            'fsr_assigned' => 'Cupidatat sit sunt',
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => '979',
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => '345',
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ]);
    }
}