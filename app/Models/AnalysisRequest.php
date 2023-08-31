<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisRequest extends Model
{
    protected $table = 'analysis_requests';
    protected $primaryKey = 'analysis_id';
    protected $fillable = [
            'analysis_id_',
            'account_number',
            'collector_name',
            'date_collected',
            'date_next_schedule',
            'time_collected',
            'collection_point',
            'collection_point_others',
            'sampling_location_address',
            'sampling_location_address_others',
            'uvlight',
            'chlorinator',
            // 'faucet_condition',
            'source_of_water_sample',
            'source_of_water_sample_others',
            'type_of_water',
            'type_of_water_others',
            'water_purpose',
            'water_purpose_others',
            'test_parameters',
            'remarks',
    ];

     public function getFormattedIdAttribute()
    {
        return str_pad($this->attributes['analysis_id'], 6, '0', STR_PAD_LEFT);
    }
}
