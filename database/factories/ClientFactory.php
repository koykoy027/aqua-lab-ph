<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{

    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_number' => $this->faker->unique()->randomNumber(4),
            'account_name' => $this->faker->name,
            'business_tin' => $this->faker->randomNumber(9),
            'name_of_owner' => $this->faker->name,
            'type_of_ownership' => $this->faker->randomElement(['Single Prorietorship', 'Partnership', 'Cooperative', 'Corporation']),
            'name_of_authorized_person' => $this->faker->name,
            'unit_no_floor_bldg_name' => $this->faker->secondaryAddress,
            'street_name_or_subdivision' => $this->faker->streetName,
            'barangay_name' => $this->faker->word,
            'municipality_or_city' => $this->faker->city,
            'zip_code' => $this->faker->postcode,
            'province' => $this->faker->state,
            'telephone' => $this->faker->phoneNumber,
            'mobile' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'fsr_assigned' => $this->faker->name,
            'market_segment' => '002A - Food and Beverages (Service)',
            'no_of_microbiology_samples' => $this->faker->numberBetween(1, 5),
            'sample_collection_frequency_micro' => 'Quarterly',
            'no_of_physico_chemical_samples' => $this->faker->numberBetween(1, 5),
            'sample_collection_frequency_pchem' => 'Monthly',
            'assigned_week' => 'Week 1',
            'type' => 'walk in',
        ];
    }
}
