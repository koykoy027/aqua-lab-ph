<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro4 extends Model
{
    protected $table = 'micros';
    protected $fillable = [
        'analysis_id',
        'micr4_color_of_the_sample',
        'micr4_fluorescence',
        'micr4_final_result',
    ];
}