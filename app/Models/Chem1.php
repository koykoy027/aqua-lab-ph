<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem1 extends Model
{
    use HasFactory;
    protected $table ='chems';
    protected $fillable = [
        'analysis_id',
        'chem1_instrument_reading_1',
        'chem1_instrument_reading_2',
        'chem1_instrument_reading_3',
        'chem1_average_instrument_reading',
        'chem1_final_result',
        'chem1_final_result_remarks',
    ];
}
