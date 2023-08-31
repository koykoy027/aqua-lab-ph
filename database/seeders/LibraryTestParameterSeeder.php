<?php

namespace Database\Seeders;

use App\Models\LibraryTestParameter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibraryTestParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LibraryTestParameter::create([
            'type' => 'micro',
            'parameter' => 'MICR1 - Heterotrophic Plate Count (HPC)',
            'abbreviation' => 'Heterotrophic Plate Count',
            'method' => 'SMEWW 9215 B. Pour Plate Method',
            'limit' => 'cfu/mL',
        ]);
            
    }
}