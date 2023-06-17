<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phys extends Model
{
    use HasFactory;
    protected $table = 'raw_datas';
    protected $fillable = [
        'analysis_id',
        'phys1_observation',
        'phys1_final_result',
        'phys1_final_result_remarks',
        'phys2_observation',
        'phys2_final_result',
        'phys2_final_result_remarks',
        'phys3_concentration_of_comparable_color_standard',
        'phys3_final_result',
        'phys3_final_result_remarks',
        'phys4_instrument_reading_1',
        'phys4_instrument_reading_2',
        'phys4_instrument_reading_3',
        'phys4_average_instrument_reading',
        'phys4_final_result',
        'phys4_final_result_remarks',
    ];
}