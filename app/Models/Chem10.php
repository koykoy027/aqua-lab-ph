<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem10 extends Model
{
    use HasFactory;
    protected $table = 'chem10s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'chem10_instrument_reading_1',
        'chem10_instrument_reading_2',
        'chem10_instrument_reading_3',
        'chem10_average_instrument_reading',
        'chem10_final_result',
        'chem10_final_result_remarks',

    ];
}
