<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro4 extends Model
{
    use HasFactory;
    protected $table = 'micro4s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micr4_color_of_the_sample',
        'micr4_fluorescence',
        'micr4_final_result',
    ];
}
