<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem6 extends Model
{
    use HasFactory;
    protected $table ='chems';
    protected $fillable = [
        'analysis_id',
        'chem6_instrument_reading_1',
        'chem6_instrument_reading_2',
        'chem6_instrument_reading_3',
        'chem6_average_instrument_reading',
        'chem6_final_result',
        'chem6_final_result_remarks',
    ];
}
