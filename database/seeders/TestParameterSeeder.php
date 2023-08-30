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
        TestParameter::create([
            'parameter' => 'MICR2 - Thermotolerant Colifom Test',
            'abbreviation' => 'Thermotolerant Colifom Test',
            'method' => 'SMEWW 9221 Multiple Tube Fermentation Technique',
            'limit' => 'MPN Index/100mL',
        ]);
        TestParameter::create([
            'parameter' => 'MICR3 - Total Coliform',
            'abbreviation' => 'Total Coliform',
            'method' => 'SMEWW 9221 Multiple Tube Fermentation Technique',
            'limit' => 'MPN Index/100mL',
        ]);
        TestParameter::create([
            'parameter' => 'MICR4 - E. coli Test',
            'abbreviation' => 'E. coli Test',
            'method' => 'SMEWW 9223 Enzyme Substrate Coliform Test',
            'limit' => '',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM1 - pH',
            'abbreviation' => 'pH',
            'method' => 'SMEWW 4500-H+ B. Electrometric Method',
            'limit' => '',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM2 - Nitrate',
            'abbreviation' => 'Nitrate',
            'method' => 'SMEWW 4500-NO3- E. Cadmium Reduction Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM3 - Total Dissolved Solids',
            'abbreviation' => 'Total Dissolved Solids',
            'method' => 'SMEWW 2540 C. Total Dissolved Solids Dried at 180°C',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM4 - Chlorine (Residual), as free',
            'abbreviation' => 'Chlorine (Residual), as free',
            'method' => 'DPD Colorimetric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM5 - Arsenic',
            'abbreviation' => 'Arsenic',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM6 - Cadmium',
            'abbreviation' => 'Cadmium',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM7 - Lead',
            'abbreviation' => 'Lead',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM9 - Iron',
            'abbreviation' => 'Iron',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'CHEM10 - Manganese',
            'abbreviation' => 'Manganese',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'PHYS1 - Appearance',
            'abbreviation' => 'Appearance',
            'method' => 'Sensory Evaluation Technique',
            'limit' => '',
        ]);
        TestParameter::create([
            'parameter' => 'PHYS2 - Odor',
            'abbreviation' => 'Odor',
            'method' => 'Sensory Evaluation Technique',
            'limit' => '',
        ]);
        TestParameter::create([
            'parameter' => 'PHYS3 - Color, apparent',
            'abbreviation' => 'Color, apparent',
            'method' => 'SMEWW 2120 B. Visual Comparison Method',
            'limit' => 'CU (UNIT)',
        ]);
        TestParameter::create([
            'parameter' => 'PHYS4 - Turbidity',
            'abbreviation' => 'Turbidity',
            'method' => 'SMEWW 2130 B. Nephelometric Method',
            'limit' => 'NTU (UNIT)',
        ]);
    }
}
