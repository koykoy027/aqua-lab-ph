<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro4_9223B extends Model
{
    use HasFactory;
    protected $table = 'micro4_9223b';

    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h',
        'micr4_9223b_final_result',
        'micr4_9223b_remarks',
    ];    
}
