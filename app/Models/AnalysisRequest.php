<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisRequest extends Model
{
    protected $table = 'analysis_requests';
    protected $primaryKey = 'analysis_id';
    protected $fillable = [
            'account_number',
            'collector_name',
            'date_collected',
            'time_collected',
            'collection_point',
            'collection_point_others',
            'sampling_location_address',
            'sampling_location_address_others',
            'uvlight',
            'chlorinator',
            'faucet_condition',
            'source_of_water_sample',
            'source_of_water_sample_others',
            'water_purpose',
            'water_purpose_others',
            'test_parameters',
            'remarks',
    ];

    
}