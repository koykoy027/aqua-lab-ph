<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestParameter extends Model
{
    use HasFactory;
    protected $table = 'test_parameters';
    protected $fillable = [
        'analysis_id',
        'test_parameters',        
    ];

    public function analysisRequests() :BelongsTo {
        return $this->belongsTo(AnalysisRequest::class);
    }
    
    public function libraryTestParameters() :BelongsTo {
        return $this->belongsTo(LibraryTestParameter::class);
    }
}