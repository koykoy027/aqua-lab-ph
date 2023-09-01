<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem3 extends Model
{
    use HasFactory;
    protected $table = 'chem3s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'chem3_initial_wt_of_evaporating_dish_replicate_1',
        'chem3_final_wt_of_evaporating_dish_replicate_1',
        'chem3_wt_of_residue_replicate_1',
        'chem3_initial_wt_of_evaporating_dish_replicate_2',
        'chem3_final_wt_of_evaporating_dish_replicate_2',
        'chem3_wt_of_residue_replicate_2',
        'chem3_average_wt_of_residue',
        'chem3_final_result',
        'chem3_final_result_remarks',

    ];
}
