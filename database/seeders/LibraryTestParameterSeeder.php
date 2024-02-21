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

        // MICRO START
        LibraryTestParameter::create([
            'filename' => 'micr1',
            'type' => 'micro',
            'parameter' => 'MICR1',
            'service' => 'Heterotrophic Plate Count',
            'method' => 'SMEWW 9215 B. Pour Plate Method',
            'limit' => 'cfu/mL',
            'sequence' => '1',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'MICR1A',
            'service' => 'Heterotrophic Plate Count',
            'method' => 'SMEWW 9215 B. Pour Plate Method (Colony Count Only)',
            'limit' => '',
            'sequence' => '2',
            'is_show' => false,
        ]);

        LibraryTestParameter::create([
            'filename' => 'micr2',
            'type' => 'micro',
            'parameter' => 'MICR2',
            'service' => 'Thermotolerant Colifom Test',
            'method' => 'SMEWW 9221 Multiple Tube Fermentation Technique',
            'limit' => 'MPN Index/100mL',
            'sequence' => '3',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'micr3',
            'type' => 'micro',
            'parameter' => 'MICR3',
            'service' => 'Total Coliform',
            'method' => 'SMEWW 9221 Multiple Tube Fermentation Technique',
            'limit' => 'MPN Index/100mL',
            'sequence' => '4',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'micr4',
            'type' => 'micro',
            'parameter' => 'MICR4',
            'service' => 'E. coli Test',
            'method' => 'SMEWW 9223 Enzyme Substrate Coliform Test',
            'limit' => '',
            'sequence' => '6',
            'is_show' => true,

        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'micro',
            'parameter' => 'MICR5',
            'service' => 'All Three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)',
            'method' => '',
            'limit' => '',
            'sequence' => '8',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'micro',
            'parameter' => 'MICR5B',
            'service' => 'All Three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)',
            'method' => '',
            'limit' => '',
            'sequence' => '9',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'micro',
            'parameter' => 'MICR5C',
            'service' => 'Microbiological Test',
            'method' => '',
            'limit' => '',
            'sequence' => '10',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'micro',
            'parameter' => 'MICR5D',
            'service' => 'Microbiological Test',
            'method' => '',
            'limit' => '',
            'sequence' => '11',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'micro',
            'parameter' => 'MICR6',
            'service' => 'Legionella pneumophila',
            'method' => '',
            'limit' => '',
            'sequence' => '12',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'MICR6A',
            'service' => 'Legionella pneumophila',
            'method' => 'SMEWW 9260 J. Spread Plate Method',
            'limit' => '',
            'sequence' => '13',
            'is_show' => true,
        ]);

        LibraryTestParameter::create([
            'type' => 'micro',
            'parameter' => 'MICRX',
            'service' => 'Multiple Microbiological Parameters (Single Sample)',
            'method' => '',
            'limit' => '',
            'sequence' => '14',
            'is_show' => true,
        ]);

        // MICRO END

        // CHEM START
        LibraryTestParameter::create([
            'filename' => 'chem1',
            'type' => 'chem',
            'parameter' => 'CHEM1',
            'service' => 'pH',
            'method' => 'SMEWW 4500-H+ B. Electrometric Method',
            'limit' => '',
            'sequence' => '15',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem2',
            'type' => 'chem',
            'parameter' => 'CHEM2',
            'service' => 'Nitrate',
            'method' => 'SMEWW 4500-NO3- E. Cadmium Reduction Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '16',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM2A',
            'service' => 'Nitrate',
            'method' => 'SMEWW 4500-NO3- D. Nitrate Electrode Method',
            'limit' => '',
            'sequence' => '7',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM2B',
            'service' => 'Nitrate',
            'method' => 'SMEWW 4110 B. Ion Chromatography with Chemical Supression of Eluent Conductivity',
            'limit' => '',
            'sequence' => '18',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem3',
            'type' => 'chem',
            'parameter' => 'CHEM3',
            'service' => 'Total Dissolved Solids',
            'method' => 'SMEWW 2540 C. Total Dissolved Solids Dried at 180°C',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '19',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem4',
            'type' => 'chem',
            'parameter' => 'CHEM4',
            'service' => 'Chlorine (Residual), as free',
            'method' => 'DPD Colorimetric Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '20',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem5',
            'type' => 'chem',
            'parameter' => 'CHEM5',
            'service' => 'Arsenic',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '21',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem6',
            'type' => 'chem',
            'parameter' => 'CHEM6',
            'service' => 'Cadmium',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '22',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem7',
            'type' => 'chem',
            'parameter' => 'CHEM7',
            'service' => 'Lead',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '23',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM8',
            'service' => 'All Twenty (20) Mandatory Chemical Parameters (DOH AO 2013-003 Dialysis Water / Administrative Order No. 2012-0001)',
            'method' => '',
            'limit' => '',
            'sequence' => '24',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem9',
            'type' => 'chem',
            'parameter' => 'CHEM9',
            'service' => 'Iron',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '25',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'chem10',
            'type' => 'chem',
            'parameter' => 'CHEM10',
            'service' => 'Manganese',
            'method' => 'SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method',
            'limit' => 'mg/L (UNIT)',
            'sequence' => '26',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM11',
            'service' => 'Mercury',
            'method' => 'SMEWW 3112 B. Cold-Vapor Atomic Absorption Spectrometric Method',
            'limit' => '',
            'sequence' => '27',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM11',
            'service' => 'Mercury',
            'method' => 'SMEWW 3112 B. Cold-Vapor Atomic Absorption Spectrometric Method',
            'limit' => '',
            'sequence' => '28',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM12',
            'service' => 'Boron',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '29',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM13',
            'service' => 'Barium',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '30',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM14',
            'service' => 'Calcium',
            'method' => 'SMEWW 3111 B. Direct Air-Acetylene Flame Method',
            'limit' => '',
            'sequence' => '31',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM14A',
            'service' => 'Calcium',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '32',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM15',
            'service' => 'Copper',
            'method' => 'SMEWW 3111 B. Direct Air-Acetylene Flame Method',
            'limit' => '',
            'sequence' => '33',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM15A',
            'service' => 'Copper',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '34',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM16',
            'service' => 'Magnesium',
            'method' => 'SMEWW 3111 B. Direct Air-Acetylene Flame Method',
            'limit' => '',
            'sequence' => '35',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM16A',
            'service' => 'Magnesium',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '36',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM17',
            'service' => 'Alkalinity',
            'method' => 'SMEWW 2320 B. Titration Method',
            'limit' => '',
            'sequence' => '37',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM18',
            'service' => 'Nickel',
            'method' => 'SMEWW 3111 B. Direct Air-Acetylene Flame Method',
            'limit' => '',
            'sequence' => '38',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM18A',
            'service' => 'Nickel',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '39',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM19',
            'service' => 'Chloride',
            'method' => 'SMEWW 4500-Cl B. Argentometric Method',
            'limit' => '',
            'sequence' => '40',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM19A',
            'service' => 'Chloride',
            'method' => 'SMEWW 4110 B. Ion Chromatography with Chemical Supression of Eluent Conductivity',
            'limit' => '',
            'sequence' => '41',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM20',
            'service' => 'Silica',
            'method' => 'SMEWW 4500-SiO2 C. Molybdosilicate Method',
            'limit' => '',
            'sequence' => '42',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM21',
            'service' => 'Total Hardness',
            'method' => 'SMEWW 2340 B. Hardness by Calculation',
            'limit' => '',
            'sequence' => '43',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM21A',
            'service' => 'Calcium Hardness',
            'method' => 'SMEWW 2340 B. Hardness by Calculation',
            'limit' => '',
            'sequence' => '44',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM22',
            'service' => 'Acidity',
            'method' => 'SMEWW 2340 B. Hardness by Calculation',
            'limit' => '',
            'sequence' => '45',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM23',
            'service' => 'Benzene',
            'method' => 'Gas Chromatographic Method',
            'limit' => '',
            'sequence' => '46',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM24',
            'service' => 'Hydrogen Sulfide',
            'method' => 'SMEWW 4500 S2. Methylene Blue Method',
            'limit' => '',
            'sequence' => '47',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM24A',
            'service' => 'Sulfide',
            'method' => 'SMEWW 4500 S2. Methylene Blue Method',
            'limit' => '',
            'sequence' => '48',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM25',
            'service' => 'Gross Alpha and Beta Activity',
            'method' => 'Liquid Scintillation Counting',
            'limit' => '',
            'sequence' => '49',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM26',
            'service' => 'Nitrite',
            'method' => 'SMEWW 4500-NO2 B. Colorimetric Method',
            'limit' => '',
            'sequence' => '50',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM26A',
            'service' => 'Nitrite',
            'method' => 'SMEWW 4110 B. Ion Chromatography with Chemical Supression of Eluent Conductivity',
            'limit' => '',
            'sequence' => '51',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM27',
            'service' => 'Sulfate',
            'method' => 'SMEWW 4110 B. Ion Chromatography with Chemical Supression of Eluent Conductivity',
            'limit' => '',
            'sequence' => '52',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM27A',
            'service' => 'Sulfate',
            'method' => 'SMEWW 4500-SO4 E. Turbidimetric Method',
            'limit' => '',
            'sequence' => '53',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM28',
            'service' => 'Zinc',
            'method' => 'SMEWW 3111 B. Direct Air-Acetylene Flame Method',
            'limit' => '',
            'sequence' => '54',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM28A',
            'service' => 'Zinc',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '55',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM29',
            'service' => 'Conductivity',
            'method' => 'SMEWW 2510 B. Laboratory Method',
            'limit' => '',
            'sequence' => '56',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM30',
            'service' => 'Antimony',
            'method' => 'SMEWW 3113 B. Electrothermal Atomic Absorption Spectrometric Method',
            'limit' => '',
            'sequence' => '57',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM31',
            'service' => 'Chromium',
            'method' => 'SMEWW 3111 B. Direct Air-Acetylene Flame Method',
            'limit' => '',
            'sequence' => '58',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'CHEM31A',
            'service' => 'Chromium',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '59',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'chem',
            'parameter' => 'CHEMX',
            'service' => 'Chemical Parameters (Single Sample)',
            'method' => 'SMEWW 3120 B. Inductively Coupled Plasma (ICP) Method',
            'limit' => '',
            'sequence' => '60',
            'is_show' => true,
        ]);

        // CHEM END

        // PHCH START
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'PHCH1',
            'service' => 'All Nine (9) Mandatory Physical and Chemical Parameters (PNSDW 2017)',
            'method' => '',
            'limit' => '',
            'sequence' => '61',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'PHCH2',
            'service' => 'Sixteen Selected Physical and Chemical Parameters (PNSDW 2017)',
            'method' => '',
            'limit' => '',
            'sequence' => '62',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => 'phys',
            'parameter' => 'PHCHX',
            'service' => 'Multiple Physical and Chemical Parameters (Single Sample)',
            'method' => '',
            'limit' => '',
            'sequence' => '63',
            'is_show' => false,
        ]);

        // PHCH END

        // PHYS START
        LibraryTestParameter::create([
            'filename' => 'phys1',
            'type' => 'phys',
            'parameter' => 'PHYS1',
            'service' => 'Appearance',
            'method' => 'Sensory Evaluation Technique',
            'limit' => '',
            'sequence' => '64',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'phys2',
            'type' => 'phys',
            'parameter' => 'PHYS2',
            'service' => 'Odor',
            'method' => 'Sensory Evaluation Technique',
            'limit' => '',
            'sequence' => '65',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'phys3',
            'type' => 'phys',
            'parameter' => 'PHYS3',
            'service' => 'Color, apparent',
            'method' => 'SMEWW 2120 B. Visual Comparison Method',
            'limit' => 'CU (UNIT)',
            'sequence' => '66',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => 'phys4',
            'type' => 'phys',
            'parameter' => 'PHYS4',
            'service' => 'Turbidity',
            'method' => 'SMEWW 2130 B. Nephelometric Method',
            'limit' => 'NTU (UNIT)',
            'sequence' => '67',
            'is_show' => true,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'PHYS5',
            'service' => 'Total Suspended Solids',
            'method' => 'SMEWW 2540 B. Total Solids at 103 to 105 C',
            'limit' => '',
            'sequence' => '68',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'PHYS6',
            'service' => 'Total Solids',
            'method' => 'SMEWW 2540 B. Total Solids at 103 to 105 C',
            'limit' => '',
            'sequence' => '69',
            'is_show' => false,
        ]);
        LibraryTestParameter::create([
            'filename' => '',
            'type' => '',
            'parameter' => 'PHYS7',
            'service' => 'Taste',
            'method' => '',
            'limit' => '',
            'sequence' => '70',
            'is_show' => false,
        ]);

        // PHYS END

        LibraryTestParameter::create([
            'filename' => 'micr3-9223b',
            'type' => 'micro',
            'parameter' => 'MICR3',
            'service' => 'Total Coliform',
            'method' => 'SMEWW 9223 B. Enzyme Substrate Method',
            'limit' => 'MPN/100ml',
            'sequence' => '5',
            'is_show' => false,
        ]);

        LibraryTestParameter::create([
            'filename' => 'micr4-9223b',
            'type' => 'micro',
            'parameter' => 'MICR4',
            'service' => 'E. coli',
            'method' => 'SMEWW 9223 B. Enzyme Substrate Method',
            'limit' => 'MPN/100ml',
            'sequence' => '7',
            'is_show' => false,
        ]);
    }
}
