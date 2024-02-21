<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro6A extends Model
{
    use HasFactory;
    protected $table = 'micro6a';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micro6a_hpc_plate_a',
        'micro6a_hpc_plate_b',
        'micro6a_hpc_average',
        'micro6a_hpc_final_result',
        'micro6a_hpc_remarks',
    ];
}
