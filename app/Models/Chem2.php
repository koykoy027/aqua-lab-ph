<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem2 extends Model
{
    use HasFactory;
    protected $table ='chems';
    protected $fillable = [
        'analysis_id',
        'chem2_instrument_reading_1',
        'chem2_instrument_reading_2',
        'chem2_instrument_reading_3',
        'chem2_average_instrument_reading',
        'chem2_final_result',
        'chem2_final_result_remarks',
    ];
}
