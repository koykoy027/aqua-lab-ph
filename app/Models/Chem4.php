<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chem4 extends Model
{
    use HasFactory;
    protected $table ='chems';
    protected $fillable = [
        'analysis_id',
        'chem4_instrument_reading',
        'chem4_final_result',
        'chem4_final_result_remarks',
    ];
}
