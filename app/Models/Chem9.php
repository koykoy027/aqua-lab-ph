<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem9 extends Model
{
    use HasFactory;
    protected $table = 'chem9s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'chem9_instrument_reading_1',
        'chem9_instrument_reading_2',
        'chem9_instrument_reading_3',
        'chem9_average_instrument_reading',
        'chem9_final_result',
        'chem9_final_result_remarks',

    ];
}
