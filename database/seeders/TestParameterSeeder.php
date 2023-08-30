<?php

namespace Database\Seeders;

use App\Models\TestParameter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestParameter::create([
            'parameter' => 'MICR1 - Heterotrophic Plate Count (HPC)',
            'abbreviation' => 'Heterotrophic Plate Count',
            'method' => 'SMEWW 9215 B. Pour Plate Method',
            'limit' => 'cfu/mL',
        ]);        
    }
}