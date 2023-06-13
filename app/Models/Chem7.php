<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem7 extends Model
{
    use HasFactory;
    protected $table ='chems';
    protected $fillable = [
        'analysis_id',
        'chem7_instrument_reading_1',
        'chem7_instrument_reading_2',
        'chem7_instrument_reading_3',
        'chem7_average_instrument_reading',
        'chem7_final_result',
        'chem7_final_result_remarks',
    ];
}
