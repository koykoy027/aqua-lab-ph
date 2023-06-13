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
        'account_number',
        'account_name',
        'business_tin',
        'name_of_owner',
        'type_of_ownership',
        'name_of_authorized_person',
        'unit_no_floor_bldg_name',
        'street_name_or_subdivision',
        'barangay_name',
        'municipality_or_city',
        'zip_code',
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
    ];
}
