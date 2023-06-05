@extends('layouts.app')
@section('title', 'Client Profile')
@section('content')


    <div class="card mb-3 bg-white">
        <h1 class="mb-3">General Information</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="account_number">Account Number</label>
                <input id="account_number" type="text" name="account_number" value="{{ $clients->account_number }}" required
                    autofocus autocomplete="account_number" readonly>
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="account_name">Account Name</label>
                <input id="account_name" type="text" name="account_name" value="{{ $clients->account_name }}" required
                    autofocus autocomplete="account_name" readonly>
            </div>
            <div class="mb-3">
                <label for="name_of_owner">Name of Owner</label>
                <input id="name_of_owner" type="text" name="name_of_owner" value="{{ $clients->name_of_owner }}" required
                    autofocus autocomplete="name_of_owner" readonly>
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="name_of_authorized_person">Name of Authorize Person</label>
                <input id="name_of_authorized_person" type="text" name="name_of_authorized_person"
                    value="{{ $clients->name_of_authorized_person }}" required autofocus
                    autocomplete="name_of_authorized_person" readonly>
            </div>
            <div class="mb-3">
                <label for="type_of_ownership">Type of ownership</label>
                <input id="type_of_ownership" type="text" name="type_of_ownership"
                    value="{{ $clients->type_of_ownership }}" required autofocus autocomplete="type_of_ownership" readonly>

            </div>
        </div>
    </div>

    <div class="card bg-white">
        <h1 class="mb-3">Address</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="unit_no_floor_bldg_name">Unit no. Floor Blg</label>
                <input id="unit_no_floor_bldg_name" type="text" name="unit_no_floor_bldg_name"
                    value="{{ $clients->unit_no_floor_bldg_name }}" required autofocus
                    autocomplete="unit_no_floor_bldg_name" readonly>

            </div>
            <div class="mb-3">
                <label for="street_name_or_subdivision">Street or Subdivision</label>
                <input id="street_name_or_subdivision" type="text" name="street_name_or_subdivision"
                    value="{{ $clients->street_name_or_subdivision }}" required autofocus
                    autocomplete="street_name_or_subdivision" readonly>

            </div>
        </div>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="province">Province</label>
                <input id="province" type="text" name="province" value="{{ $clients->province }}" required autofocus
                    autocomplete="province" readonly>

            </div>
            <div class="mb-3">
                <label for="municipality_or_city">Municipality or City</label>
                <input id="municipality_or_city" type="text" name="municipality_or_city"
                    value="{{ $clients->municipality_or_city }}" required autofocus autocomplete="municipality_or_city"
                    readonly>

            </div>
        </div>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="barangay_name">Barangay</label>
                <input id="barangay_name" type="text" name="barangay_name" value="{{ $clients->barangay_name }}" required
                    autofocus autocomplete="barangay_name" readonly>
            </div>
            <div class="mb-3">
                <label for="zip_code">Zip code</label>
                <input id="zip_code" type="text" name="zip_code" value="{{ $clients->zip_code }}" required autofocus
                    autocomplete="zip_code" readonly>

            </div>
        </div>
    </div>

    <div class="card bg-white">
        <h1 class="mb-3">Contact information</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="telephone">Telephone number</label>
                <input id="telephone" type="tel" name="telephone" value="{{ $clients->telephone }}" required autofocus
                    autocomplete="telephone" readonly>
            </div>
            <div class="mb-3">
                <label for="mobile">Mobile number</label>
                <input id="mobile" type="tel" name="mobile" value="{{ $clients->mobile }}" required autofocus
                    autocomplete="mobile" readonly>

            </div>
            <div class="mb-3">
                <label for="email">Email address</label>
                <input id="email" type="email" name="email" value="{{ $clients->email }}" required autofocus
                    autocomplete="email" readonly>
            </div>
        </div>
    </div>

    <div class="card bg-white">
        <h1 class="mb-3">Classification</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="fsr_assigned">FSR Assigned</label>
                <input id="fsr_assigned" type="text" name="fsr_assigned" value="{{ $clients->fsr_assigned }}"
                    required autofocus autocomplete="fsr_assigned" readonly>
            </div>

            <div class="mb-3">
                <label for="market_segment">Market Segment</label>
                <input name="market_segment" id="market_segment" value="{{ $clients->market_segment }}" required
                    autofocus autocomplete="market_segment" readonly>
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="no_of_microbiology_samples">Number of Microbiolog Samples</label>
                <input id="no_of_microbiology_samples" type="text" name="no_of_microbiology_samples"
                    value="{{ $clients->no_of_microbiology_samples }}" required autofocus
                    autocomplete="no_of_microbiology_samples" readonly>
            </div>

            <div class="mb-3">
                <label for="sample_collection_frequency_micro">Sample Collection Frequency Micro</label>
                <input name="sample_collection_frequency_micro" id="sample_collection_frequency_micro"
                    value="{{ $clients->sample_collection_frequency_micro }}" required autofocus
                    autocomplete="sample_collection_frequency_micro" readonly />
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="no_of_physico_chemical_samples">Number of Physico Chemical Samples</label>
                <input id="no_of_physico_chemical_samples" type="text" name="no_of_physico_chemical_samples"
                    value="{{ $clients->no_of_physico_chemical_samples }}" required autofocus
                    autocomplete="no_of_physico_chemical_samples" readonly>
            </div>

            <div class="mb-3">
                <label for="sample_collection_frequency_pchem">Sample Collection Frequency Pchem</label>
                <input name="sample_collection_frequency_pchem" id="sample_collection_frequency_pchem"
                    value="{{ $clients->sample_collection_frequency_pchem }}" required autofocus
                    autocomplete="sample_collection_frequency_pchem" readonly>
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="assigned_week">Assigned Week</label>
                <input name="assigned_week" id="assigned_week" value="{{ $clients->assigned_week }}" required autofocus
                    autocomplete="assigned_week" readonly />
            </div>
        </div>

    </div>

@endsection
