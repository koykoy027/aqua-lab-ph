<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro2 extends Model
{
    protected $table = 'micros';
    protected $fillable = [
        'analysis_id',
        'micr2_tc_24',
        'micr2_tc_48',
        'micr2_tc_final_result',
        'micr2_tc_remarks',
    ];
}