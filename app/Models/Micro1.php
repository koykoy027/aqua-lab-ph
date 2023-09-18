<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro1 extends Model
{
    use HasFactory;

    protected $table = 'micro1s';
    protected $fillable = [
        'analysis_id',
        'test_parameters_id',
        'micr1_hpc_plate_a',
        'micr1_hpc_plate_b',
        'micr1_hpc_average',
        'micr1_hpc_difference',
        'micr1_hpc_final_result',
        'micr1_hpc_remarks',
    ];

    public function libraryTestParameter(){
        return $this->belongsTo(LibraryTestParameter::class, 'test_parameters_id');
    }
}