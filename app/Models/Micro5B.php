<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro5B extends Model
{
    use HasFactory;
    protected $table = 'micro5bs';

    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micr5b_hpc_plate_a',
        'micr5b_hpc_plate_b',
        'micr5b_hpc_average',
        'micr5b_hpc_difference',
        'micr5b_hpc_final_result',
        'micr5b_hpc_remarks',
        'micr5b_no_of_yellow_wells_rxn_after_18h',
        'micr5b_no_of_yellow_flourescent_wells_rxn_after_18hr',
    ];
}
