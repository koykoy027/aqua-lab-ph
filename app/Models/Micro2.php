<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro2 extends Model
{
    use HasFactory;
    protected $table = 'micro2s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micr2_tc_24',
        'micr2_tc_48',
        'micr2_ec_24',
        'micr2_tc_final_result',
        'micr2_tc_remarks',
    ];
}
