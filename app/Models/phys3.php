<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phys3 extends Model
{
    use HasFactory;
    protected $table = 'phys3s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'phys3_concentration_of_comparable_color_standard',
        'phys3_final_result',
        'phys3_final_result_remarks',

    ];
}
