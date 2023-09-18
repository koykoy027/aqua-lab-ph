<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem5 extends Model
{
    use HasFactory;
    protected $table = 'chem5s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'chem5_instrument_reading_1',
        'chem5_instrument_reading_2',
        'chem5_instrument_reading_3',
        'chem5_average_instrument_reading',
        'chem5_final_result',
        'chem5_final_result_remarks',

    ];
}
