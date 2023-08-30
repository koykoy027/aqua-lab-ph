<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryTestParameter extends Model
{
    use HasFactory;
    protected $table = "library_test_parameters";
    protected $fillable = [
        'type',
        'abbreviation',
        'parameter',
        'method',
        'limit',
    ];
}