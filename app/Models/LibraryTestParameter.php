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
        'service',
        'parameter',
        'method',
        'limit',
        'filename',
        'sequence',
        'is_show',
    ];

    public function testParameter(): BelongsTo
    {
        return $this->belongsTo(TestParameter::class);
    }

    public function micro1()
    {
        return $this->hasMany(Micro1::class);
    }
}
