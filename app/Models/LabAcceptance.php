<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabAcceptance extends Model
{
    protected $table = 'lab_acceptance';
    // protected $primaryKey = 'analysis_id';
    protected $fillable = [
        'sample_id',
        'analysis_id',
        'evaluated_by',
        'date_evaluated',
        'time_evaluated',
        // 'sample_condition',
        'remarks',
        'if_remarks_are_rejected',

    ];

    public function analysisRequest() {
        return $this->belongsTo(AnalysisRequest::class, 'analysis_id', 'id');
    }
}