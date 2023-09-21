<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleCondition extends Model
{
    use HasFactory;
    protected $table = 'sample_conditions';
    protected $fillable = [
        'lab_acceptance',
        'name',
    ];
}
