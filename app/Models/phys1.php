<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phys1 extends Model
{
    use HasFactory;
    protected $table = 'phys1s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'phys1_observation',
        'phys1_final_result',
        'phys1_final_result_remarks',

    ];
}
