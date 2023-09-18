<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phys2 extends Model
{
    use HasFactory;
    protected $table = 'phys2s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'phys2_observation',
        'phys2_final_result',
        'phys2_final_result_remarks',

    ];
}
