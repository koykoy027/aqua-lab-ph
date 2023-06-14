<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro extends Model
{
    protected $table ='micros';
    protected $fillable = [
        'analysis_id',
        'micr1_hpc_plate_a',
        'micr1_hpc_plate_b',
        'micr1_hpc_average',
        'micr1_hpc_difference',
        'micr1_hpc_final_result',
        'micr1_hpc_remarks',
        'micr2_tc_24',
        'micr2_tc_48',
        'micr2_tc_final_result',
        'micr2_tc_remarks',
        'micr3_lauryl_24',
        'micr3_lauryl_48',
        'micr3_brillant_24',
        'micr3_brillant_48',
        'micr3_final_result',
        'micr3_remarks',
        'micr4_color_of_the_sample',
        'micr4_fluorescence',
        'micr4_final_result',
    ];
}