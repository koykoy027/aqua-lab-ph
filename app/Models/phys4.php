<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phys4 extends Model
{
    use HasFactory;
    protected $table = 'phys4s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'phys4_instrument_reading_1',
        'phys4_instrument_reading_2',
        'phys4_instrument_reading_3',
        'phys4_average_instrument_reading',
        'phys4_final_result',
        'phys4_final_result_remarks',

    ];
}
