@extends('layouts.app')
@section('title', 'Add Client Account')
@section('content')

    <form method="POST" action="{{ route('service.add-client-account.store') }}">
        @csrf
        <div class="mb-3 bg-white card">
            <h1 class="mb-3">General Information</h1>

            <input type="hidden" name="type" value="walk in" readonly />
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="client_id">Client Account ID</label>
                    <input type="hidden" id="currentAccountNumber" value="{{ $currentAccountNumber ?? '1' }}" readonly>
                    <input id="client_id" type="text" name="client_id"
                        value="" required autofocus autocomplete="client_id"
                        {{ Auth::user()->role == 'Service Coordinator' ? '' : 'readonly' }}>
                    @error('client_id')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="account_name">Account Name</label>
                    <input id="account_name" type="text" name="account_name" value="{{ old('account_name') }}" required
                        autofocus autocomplete="account_name">
                    @error('account_name')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name_of_owner">Name of Owner</label>
                    <input id="name_of_owner" type="text" name="name_of_owner" value="{{ old('name_of_owner') }}"
                        required autofocus autocomplete="name_of_owner">
                    @error('name_of_owner')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="name_of_authorized_person">Name of Authorized Person</label>
                    <input id="name_of_authorized_person" type="text" name="name_of_authorized_person"
                        value="{{ old('name_of_authorized_person') }}" required autofocus
                        autocomplete="name_of_authorized_person">
                    @error('name_of_authorized_person')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type_of_ownership">Type of ownership</label>
                    <div class="grid grid-cols-4">
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input name="type_of_ownership" id="single_prorietorship" value="Single Prorietorship"
                                    type="radio"
                                    class="w-4 h-4 border border-gray-300 rounded focus:ring-3 bg-gray-50 focus:ring-blue-300">
                            </div>
                            <label for="single_prorietorship" class="ml-2 text-sm font-medium text-gray-900">Single
                                Prorietorship</label>
                        </div>

                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input name="type_of_ownership" id="partnership" value="Partnership" type="radio"
                                    class="w-4 h-4 border border-gray-300 rounded focus:ring-3 bg-gray-50 focus:ring-blue-300">
                            </div>
                            <label for="partnership" class="ml-2 text-sm font-medium text-gray-900">Partnership</label>
                        </div>

                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input name="type_of_ownership" id="cooperative" value="Cooperative" type="radio"
                                    class="w-4 h-4 border border-gray-300 rounded focus:ring-3 bg-gray-50 focus:ring-blue-300">
                            </div>
                            <label for="cooperative" class="ml-2 text-sm font-medium text-gray-900">Cooperative</label>
                        </div>

                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input name="type_of_ownership" id="corporation" value="Corporation" type="radio"
                                    class="w-4 h-4 border border-gray-300 rounded focus:ring-3 bg-gray-50 focus:ring-blue-300">
                            </div>
                            <label for="corporation" class="ml-2 text-sm font-medium text-gray-900">Corporation</label>
                        </div>
                    </div>

                    @error('type_of_ownership')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-white card">
            <h1 class="mb-3">Address</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="unit_no_floor_bldg_name">Unit no. Floor Blg</label>
                    <input id="unit_no_floor_bldg_name" type="text" name="unit_no_floor_bldg_name"
                        value="{{ old('unit_no_floor_bldg_name') }}" required autofocus
                        autocomplete="unit_no_floor_bldg_name">
                    @error('unit_no_floor_bldg_name')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="street_name_or_subdivision">Street or Subdivision</label>
                    <input id="street_name_or_subdivision" type="text" name="street_name_or_subdivision"
                        value="{{ old('street_name_or_subdivision') }}" required autofocus
                        autocomplete="street_name_or_subdivision">
                    @error('street_name_or_subdivision')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="api_region">Region</label>
                    <select id="api_region" type="text" name="api_region" value="{{ old('api_region') }}" required
                        autofocus autocomplete="api_region">
                        <option disabled selected>Select Region</option>
                    </select>

                    <input id="region" type="hidden" name="region" required autofocus autocomplete="region">
                    @error('region')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="api_province">Province</label>
                    <select id="api_province" type="text" name="province" value="{{ old('province') }}" required
                        autofocus autocomplete="province">
                        <option disabled selected>Select Province</option>
                    </select>

                    <input id="province" type="hidden" name="province" required autofocus autocomplete="province">
                    @error('province')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="api_city">Municipality or City</label>
                    <select id="api_city" type="text" name="municipality_or_city"
                        value="{{ old('municipality_or_city') }}" required autofocus autocomplete="municipality_or_city">
                        <option disabled selected>Select Municipality or City</option>
                    </select>
                    <input id="municipality_or_city" type="hidden" name="municipality_or_city" required autofocus
                        autocomplete="municipality_or_city" onchange="marketSegment(this.value)">
                    @error('municipality_or_city')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="api_barangay">Barangay</label>
                    <select id="api_barangay" type="text" name="barangay_name" value="{{ old('barangay_name') }}"
                        required autofocus autocomplete="barangay_name">
                        <option disabled selected>Select Barangay</option>
                    </select>
                    <input id="barangay_name" type="hidden" name="barangay_name" required autofocus
                        autocomplete="barangay_name">
                    @error('barangay_name')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="zip_code">Zip code</label>
                    <input id="zip_code" type="text" name="zip_code" value="{{ old('zip_code') }}" autofocus
                        autocomplete="zip_code">
                    @error('zip_code')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-white card">
            <h1 class="mb-3">Contact information</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="telephone">Telephone number</label>
                    <input id="telephone" type="tel" name="telephone" value="{{ old('telephone') }}" autofocus
                        autocomplete="telephone">
                    @error('telephone')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mobile">Mobile number</label>
                    <input id="mobile" type="tel" name="mobile" value="{{ old('mobile') }}" required autofocus
                        autocomplete="mobile">
                    @error('mobile')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" autofocus
                        autocomplete="email">
                    @error('email')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- contact person --}}
            <hr>
            <h1 class="mb-3">Contact person 1</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="contact_person1_name">Contact Person</label>
                    <input id="contact_person1_name" name="contact_person1_name"
                        value="{{ old('contact_person1_name') }}" autofocus autocomplete="contact_person1_name">
                    @error('contact_person1_name')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact_person1_contact">Contact details</label>
                    <input id="contact_person1_contact" name="contact_person1_contact"
                        value="{{ old('contact_person1_contact') }}" autofocus autocomplete="contact_person1_contact">
                    @error('contact_person1_contact')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact_person1_email">Contact Email</label>
                    <input id="contact_person1_email" type="email" name="contact_person1_email"
                        value="{{ old('contact_person1_email') }}" autofocus autocomplete="contact_person1_email">
                    @error('contact_person1_email')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <hr>
            <h1 class="mb-3">Contact person 2</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="contact_person2_name">Contact Person</label>
                    <input id="contact_person2_name" name="contact_person2_name"
                        value="{{ old('contact_person2_name') }}" autofocus autocomplete="contact_person2_name">
                    @error('contact_person2_name')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact_person2_contact">Contact details</label>
                    <input id="contact_person2_contact" name="contact_person2_contact"
                        value="{{ old('contact_person2_contact') }}" autofocus autocomplete="contact_person2_contact">
                    @error('contact_person2_contact')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact_person2_email">Contact Email</label>
                    <input id="contact_person2_email" type="email" name="contact_person2_email"
                        value="{{ old('contact_person2_email') }}" autofocus autocomplete="contact_person2_email">
                    @error('contact_person2_email')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

        </div>

        <hr>



        <div class="bg-white card">
            <h1 class="mb-3">Classification</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="fsr_assigned">FSR Assigned</label>
                    <input id="fsr_assigned" type="text" name="fsr_assigned" value="{{ old('fsr_assigned') }}"
                        required autofocus autocomplete="fsr_assigned">
                    @error('fsr_assigned')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="market_segment">Market Segment</label>
                    <select name="market_segment" id="market_segment" value="{{ old('market_segment') }}" required
                        autofocus autocomplete="market_segment" onchange="marketSegment(this.value)">
                        <option disabled selected>Select Market Segment</option>
                        <option value="0001 - Water Refilling Station">0001 - Water Refilling Station</option>
                        <option value="002A - Food and Beverages (Service)">002A - Food and Beverages (Service)</option>
                        <option value="002B - Food and Beverages (Manufacturer)">002B - Food and Beverages (Manufacturer)</option>
                        <option value="003 - Hospitality Industry">003 - Hospitality Industry</option>
                        <option value="004A - Healthcare (Dialysis)">004A - Healthcare (Dialysis)</option>
                        <option value="004B - Healthcare (Lying-in)">004B - Healthcare (Lying-in)</option>
                        <option value="004C - Healthcare (Hospital)">004C - Healthcare (Hospital)</option>
                        <option value="005 - Water Service Provider">005 - Water Service Provider</option>
                        <option value="006 - Residential">006 - Residential</option>
                        <option value="007 - Academe">007 - Academe</option>
                        <option value="008 - Industries">008 - Industries</option>
                        <option value="Others">Others</option>
                    </select>
                    <input type="hidden" id="marketSegmentInput">

                    @error('market_segment')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="market_segment_others">Market Segment , if others</label>
                    <input id="market_segment_others" type="text" name="market_segment_others"
                        value="{{ old('market_segment_others') }}" required autofocus
                        autocomplete="market_segment_others" readonly>
                    @error('market_segment_others')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="no_of_microbiology_samples">Microbiological Samples</label>
                    <input id="no_of_microbiology_samples" type="text" name="no_of_microbiology_samples"
                        value="{{ old('no_of_microbiology_samples') }}" required autofocus
                        autocomplete="no_of_microbiology_samples">
                    @error('no_of_microbiology_samples')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sample_collection_frequency_micro">Sample Collection Frequency Micro</label>
                    <select name="sample_collection_frequency_micro" id="sample_collection_frequency_micro"
                        value="{{ old('sample_collection_frequency_micro') }}" required autofocus
                        autocomplete="sample_collection_frequency_micro">
                        <option value="Monthly">Monthly</option>
                        <option value="Quarterly">Quarterly</option>
                        <option value="BI Annual">BI Annual</option>
                        <option value="Annual">Annual</option>
                    </select>

                    @error('sample_collection_frequency_micro')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="no_of_physico_chemical_samples">Number of Physico Chemical Samples</label>
                    <input id="no_of_physico_chemical_samples" type="text" name="no_of_physico_chemical_samples"
                        value="{{ old('no_of_physico_chemical_samples') }}" required autofocus
                        autocomplete="no_of_physico_chemical_samples">
                    @error('no_of_physico_chemical_samples')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sample_collection_frequency_pchem">Sample Collection Frequency Pchem</label>
                    <select name="sample_collection_frequency_pchem" id="sample_collection_frequency_pchem"
                        value="{{ old('sample_collection_frequency_pchem') }}" required autofocus
                        autocomplete="sample_collection_frequency_pchem">
                        <option value="Monthly">Monthly</option>
                        <option value="Quarterly">Quarterly</option>
                        <option value="BI Annual">BI Annual</option>
                        <option value="Annual">Annual</option>
                    </select>

                    @error('sample_collection_frequency_pchem')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="assigned_week">Assigned Week</label>
                    <select name="assigned_week" id="assigned_week" value="{{ old('assigned_week') }}" required
                        autofocus autocomplete="assigned_week">
                        <option value="Week 1">Week 1</option>
                        <option value="Week 2">Week 2</option>
                        <option value="Week 3">Week 3</option>
                        <option value="Week 4">Week 4</option>
                    </select>

                    @error('assigned_week')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
        </div>
    </form>
@endsection
