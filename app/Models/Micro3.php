<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro3 extends Model
{
    use HasFactory;
    protected $table = 'micro3s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micr3_lauryl_24',
        'micr3_lauryl_48',
        'micr3_brillant_24',
        'micr3_brillant_48',
        'micr3_final_result',
        'micr3_remarks',
    ];
}
