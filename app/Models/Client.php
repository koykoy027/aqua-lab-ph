<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'account_number';
    protected $table = 'clients';

    protected $fillable = [
        'client_id',
        'account_number',
        'account_name',
        'name_of_owner',
        'type_of_ownership',
        'name_of_authorized_person',
        'unit_no_floor_bldg_name',
        'street_name_or_subdivision',
        'barangay_name',
        'municipality_or_city',
        'zip_code',
        'region',
        'province',
        'telephone',
        'mobile',
        'email',
        'fsr_assigned',
        'market_segment',
        'market_segment_others',
        'no_of_microbiology_samples',
        'sample_collection_frequency_micro',
        'no_of_physico_chemical_samples',
        'sample_collection_frequency_pchem',
        'assigned_week',
        'type',

        // contact person
        'contact_person1_name',
        'contact_person1_contact',
        'contact_person1_email',
        'contact_person2_name',
        'contact_person2_contact',
        'contact_person2_email',
    ];

    public function analysisRequest()
    {
        return $this->hasMany(AnalysisRequest::class, 'account_number');
    }
}
