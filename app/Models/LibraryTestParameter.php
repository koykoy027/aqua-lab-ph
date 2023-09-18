<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'filename',
    ];

    public function testParameter() :BelongsTo {
        return $this->belongsTo(TestParameter::class);
    }

    public function micro1()
    {
        return $this->hasMany(Micro1::class);
    }
}