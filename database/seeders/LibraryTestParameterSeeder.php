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

        LibraryTestParameter::create([
            'type' => 'micro',
            'parameter' => 'MICR2 - Thermotolerant Colifom Test',
            'abbreviation' => 'Thermotolerant Colifom Test',
            'method' => 'SMEWW 9221 Multiple Tube Fermentation Technique',
            'limit' => 'MPN Index/100mL',
        ]);
        LibraryTestParameter::create([
            'type' => 'micro',
            'parameter' => 'MICR3 - Total Coliform',
            'abbreviation' => 'Total Coliform',
            'method' => 'SMEWW 9221 Multiple Tube Fermentation Technique',
            'limit' => 'MPN Index/100mL',
        ]);
        LibraryTestParameter::create([
            'type' => 'micro',
            'parameter' => 'MICR4 - E. coli Test',
            'abbreviation' => 'E. coli Test',
            'method' => 'SMEWW 9223 Enzyme Substrate Coliform Test',
            'limit' => '',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM1 - pH',
            'abbreviation' => 'pH',
            'method' => 'SMEWW 4500-H+ B. Electrometric Method',
            'limit' => '',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM2 - Nitrate',
            'abbreviation' => 'Nitrate',
            'method' => 'SMEWW 4500-NO3- E. Cadmium Reduction Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM3 - Total Dissolved Solids',
            'abbreviation' => 'Total Dissolved Solids',
            'method' => 'SMEWW 2540 C. Total Dissolved Solids Dried at 180°C',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM4 - Chlorine (Residual), as free',
            'abbreviation' => 'Chlorine (Residual), as free',
            'method' => 'DPD Colorimetric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM5 - Arsenic',
            'abbreviation' => 'Arsenic',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM6 - Cadmium',
            'abbreviation' => 'Cadmium',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM7 - Lead',
            'abbreviation' => 'Lead',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM9 - Iron',
            'abbreviation' => 'Iron',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'CHEM10 - Manganese',
            'abbreviation' => 'Manganese',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'PHYS1 - Appearance',
            'abbreviation' => 'Appearance',
            'method' => 'Sensory Evaluation Technique',
            'limit' => '',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'PHYS2 - Odor',
            'abbreviation' => 'Odor',
            'method' => 'Sensory Evaluation Technique',
            'limit' => '',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'PHYS3 - Color, apparent',
            'abbreviation' => 'Color, apparent',
            'method' => 'SMEWW 2120 B. Visual Comparison Method',
            'limit' => 'CU (UNIT)',
        ]);
        LibraryTestParameter::create([
            'type' => 'pychem',
            'parameter' => 'PHYS4 - Turbidity',
            'abbreviation' => 'Turbidity',
            'method' => 'SMEWW 2130 B. Nephelometric Method',
            'limit' => 'NTU (UNIT)',
        ]);
            
    }
}