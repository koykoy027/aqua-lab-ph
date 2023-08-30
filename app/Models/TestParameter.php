<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestParameter extends Model
{
    use HasFactory;
    protected $table = "test_parameters";
    protected $fillable = [
        'abbreviation',
        'parameter',
        'method',
        'limit',
    ];
}