<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem4 extends Model
{
    use HasFactory;
    protected $table = 'chem4s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'chem4_instrument_reading',
        'chem4_final_result',
        'chem4_final_result_remarks',

    ];
}
