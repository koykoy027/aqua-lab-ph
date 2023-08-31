@extends('layouts.app')
@section('title', 'Add Analysis Request Form')
@section('content')

    @if (Auth::user()->role === 'Super Admin' or
            Auth::user()->role === 'Admin Asstistant' or
            Auth::user()->role === 'Service Coordinator' or
            Auth::user()->role === 'Marketing Manager' or
            Auth::user()->role === 'Sales Manager' or
            Auth::user()->role === 'FSR')
        <div class="mb-3 bg-white card">
            <h1 class="mb-3">Account Information</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="account_name">Account Name</label>
                    <input id="account_name" type="text" name="account_name" value="{{ $clients->account_name }}" readonly>

                </div>
                <div class="mb-3">
                    <label for="client_id">Client Account ID</label>
                    <input id="client_id" type="text" name="client_id" value="{{ $clients->client_id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name_of_owner">Name of owner</label>
                    <input id="name_of_owner" type="text" name="name_of_owner" value="{{ $clients->name_of_owner }}"
                        readonly>
                </div>
            </div>


            <h1 class="mt-3 mb-3">Address</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="unit_no_floor_bldg_name">Unit no. Floor Blg</label>
                    <input id="unit_no_floor_bldg_name" type="text" name="unit_no_floor_bldg_name"
                        value="{{ $clients->unit_no_floor_bldg_name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="street_name_or_subdivision">Street or Subdivision</label>
                    <input id="street_name_or_subdivision" type="text" name="street_name_or_subdivision"
                        value="{{ $clients->street_name_or_subdivision }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="region">Region</label>
                    <input id="region" type="text" name="region" value="{{ $clients->region }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="province">Province</label>
                    <input id="province" type="text" name="province" value="{{ $clients->province }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="municipality_or_city">Municipality or City</label>
                    <input id="municipality_or_city" type="text" name="municipality_or_city"
                        value="{{ $clients->municipality_or_city }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="barangay_name">Barangay</label>
                    <input id="barangay_name" type="text" name="barangay_name" value="{{ $clients->barangay_name }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="zip_code">Zip code</label>
                    <input id="zip_code" type="text" name="zip_code" value="{{ $clients->zip_code }}" readonly>
                </div>
            </div>

            <h1 class="mt-3 mb-3">Contact information</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">

                <div class="mb-3">
                    <label for="telephone">Telephone number</label>
                    <input id="telephone" type="tel" name="telephone" value="{{ $clients->telephone }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="mobile">Mobile number</label>
                    <input id="mobile" type="tel" name="mobile" value="{{ $clients->mobile }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email">Email address</label>
                    <input id="email" type="email" name="email" value="{{ $clients->email }}" readonly>
                </div>
            </div>

            <h1 class="mt-3 mb-3">Contact Person 1</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="contact_person1_name">Contact Person</label>
                    <input id="contact_person1_name" name="contact_person1_name"
                        value="{{ $clients->contact_person1_name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="contact_person1_contact">Contact Details</label>
                    <input id="contact_person1_contact" name="contact_person1_contact"
                        value="{{ $clients->contact_person1_contact }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="contact_person1_email">Contact Email</label>
                    <input id="contact_person1_email" name="contact_person1_email"
                        value="{{ $clients->contact_person1_email }}" readonly>
                </div>
            </div>

            <h1 class="mt-3 mb-3">Contact Person 2</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="contact_person2_name">Contact Person</label>
                    <input id="contact_person2_name" name="contact_person2_name"
                        value="{{ $clients->contact_person2_name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="contact_person2_contact">Contact Details</label>
                    <input id="contact_person2_contact" name="contact_person2_contact"
                        value="{{ $clients->contact_person2_contact }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="contact_person2_email">Contact Email</label>
                    <input id="contact_person2_email" name="contact_person2_email"
                        value="{{ $clients->contact_person2_email }}" readonly>
                </div>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('service.add-analysis-request.store') }}">
        @csrf
        <input id="account_number" type="hidden" name="account_number" value="{{ $clients->account_number }}"
            readonly>

        <input id="status" type="hidden" name="remarks" value="Pending" readonly>
        <div class="mb-3 bg-white card">
            <h1 class="mb-3">Sample Collection</h1>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="collector_name">Collector name</label>
                    <input id="collector_name" type="text" name="collector_name" value="{{ old('collector_name') }}"
                        required autofocus autocomplete="collector_name">
                    @error('collector_name')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date_collected">Date Collected</label>
                    <input id="date_collected" type="date" name="date_collected" value="{{ old('date_collected') }}"
                        required autofocus autocomplete="date_collected">
                    @error('date_collected')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="time_collected">Time Collected</label>
                    <input id="time_collected" type="time" name="time_collected" value="{{ old('time_collected') }}"
                        required autofocus autocomplete="time_collected">
                    @error('time_collected')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="collection_point">Collection point</label>
                    <select name="collection_point" id="collection_point" value="{{ old('collection_point') }}" required
                        autofocus autocomplete="collection_point" onchange="collectionPoint(this.value)">
                        <option value="Faucet">Faucet</option>
                        <option value="Pump">Pump</option>
                        <option value="Others">Others</option>
                    </select>
                    @error('collection_point')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="collection_point_others">Collection point , if others</label>
                    <input id="collection_point_others" type="text" name="collection_point_others"
                        value="{{ old('collection_point_others') }}" required autofocus
                        autocomplete="collection_point_others" readonly>
                    @error('collection_point_others')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="sampling_location_address">Address of Collection Point</label>
                    <div class="flex justify-evenly">
                        <div class="flex items-center mr-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                id="sampling_location_address_same" name="sampling_location_address" type="radio"
                                value="SAME AS ADDRESS" onchange="samplingLocationAddress(this.value)">
                            <label class="ml-2 text-sm font-medium text-gray-900"
                                for="sampling_location_address_same">Same with the Account Address</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                id="remarksConditionallyAccepted" name="sampling_location_address" type="radio"
                                value="NOT SAME AS ADDRESS" onchange="samplingLocationAddress(this.value)">
                            <label class="ml-2 text-sm font-medium text-gray-900" for="remarksConditionallyAccepted">Not
                                same with the Account Address</label>
                        </div>
                    </div>
                    @error('sampling_location_address')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="my-3">
                        <label for="sampling_location_address_others">Address of Collection Point, if others</label>
                        <textarea id="sampling_location_address_others" rows="4" name="sampling_location_address_others"
                            value="{{ old('sampling_location_address_others') }}" required autofocus
                            autocomplete="sampling_location_address_others" readonly></textarea>
                        @error('sampling_location_address_others')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="">UV Light</label>
                    <div class="flex justify-evenly">
                        <div class="flex items-center mr-4">
                            <input id="uvlightNA" type="radio" value="N/A" name="uvlight"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="uvlightNA" class="ml-2 text-sm font-medium text-gray-900">N/A</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="uvlightON" type="radio" value="ON" name="uvlight"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="uvlightON" class="ml-2 text-sm font-medium text-gray-900">ON</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="uvlightOFF" type="radio" value="OFF" name="uvlight"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="uvlightOFF" class="ml-2 text-sm font-medium text-gray-900">OFF</label>
                        </div>
                    </div>
                    @error('uvlight')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-3">
                        <label for="">Chlorinator</label>
                        <div class="flex justify-evenly">
                            <div class="flex items-center mr-4">
                                <input id="chlorinatorNA" type="radio" value="N/A" name="chlorinator"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="chlorinatorNA" class="ml-2 text-sm font-medium text-gray-900">N/A</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="chlorinatorON" type="radio" value="ON" name="chlorinator"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="chlorinatorON" class="ml-2 text-sm font-medium text-gray-900">ON</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="chlorinatorOFF" type="radio" value="OFF" name="chlorinator"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="chlorinatorOFF" class="ml-2 text-sm font-medium text-gray-900">OFF</label>
                            </div>
                        </div>
                        @error('uvlight')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <div class="mb-3">
                        <label for="faucet_condition">Faucet Condition after Disinfection</label>
                        <input id="faucet_condition" type="text" name="faucet_condition"
                            value="{{ old('faucet_condition') }}" required autofocus autocomplete="faucet_condition">
                        @error('faucet_condition')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="mb-3 bg-white card">
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="source_of_water_sample">Source of Water Sample</label>
                    <select name="source_of_water_sample" id="source_of_water_sample"
                        value="{{ old('source_of_water_sample') }}" required autofocus
                        autocomplete="source_of_water_sample" onchange="sourceOfWaterSample(this.value)">
                        <option value="Maynilad">Maynilad</option>
                        <option value="MWSS">MWSS</option>
                        <option value="Local Water Works">Local Water Works</option>
                        <option value="Others">Others</option>
                    </select>
                    @error('source_of_water_sample')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="source_of_water_sample_others">Source of Water Sample , if others</label>
                    <input id="source_of_water_sample_others" type="text" name="source_of_water_sample_others"
                        value="{{ old('source_of_water_sample_others') }}" required autofocus
                        autocomplete="source_of_water_sample_others" readonly>
                    @error('source_of_water_sample_others')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="type_of_water">Type of Water</label>
                    <select name="type_of_water" id="type_of_water" value="{{ old('type_of_water') }}" required
                        autofocus autocomplete="type_of_water" onchange="typeOfWater(this.value)">
                        <option value="Chlorinated">Chlorinated</option>
                        <option value="Filtered">Filtered</option>
                        <option value="Unfiltered">Unfiltered</option>
                        <option value="Ice">Ice</option>
                        <option value="Raw Water">Raw Water</option>
                        <option value="Product Water">Product Water</option>
                        <option value="Purified Water">Purified Water</option>
                        <option value="Alkaline Water">Alkaline Water</option>
                        <option value="Mineral Water">Mineral Water</option>
                        <option value="Point of Use">Point of Use</option>
                        <option value="Others">Others</option>
                    </select>
                    @error('type_of_water')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type_of_water_others">Type of Water , if others</label>
                    <input id="type_of_water_others" type="text" name="type_of_water_others"
                        value="{{ old('type_of_water_others') }}" required autofocus autocomplete="type_of_water_others"
                        readonly>
                    @error('type_of_water_others')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="water_purpose">Water Purpose</label>
                    <select name="water_purpose" id="water_purpose" value="{{ old('water_purpose') }}" required
                        autofocus autocomplete="water_purpose" onchange="waterPurpose(this.value)">
                        <option value="Drinking">Drinking</option>
                        <option value="Dialysis">Dialysis</option>
                        <option value="Recreational">Recreational</option>
                        <option value="Others">Others</option>
                    </select>
                    @error('water_purpose')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="water_purpose_others">Water Purpose , if others</label>
                    <input id="water_purpose_others" type="text" name="water_purpose_others"
                        value="{{ old('water_purpose_others') }}" required autofocus autocomplete="water_purpose_others"
                        readonly>
                    @error('water_purpose_others')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="test_parameters">Test Parameters</label>
                    <select name="test_parameters" id="test_parameters" value="{{ old('test_parameters') }}" required
                        onchange="toggleTestParameters(this.value)">
                        <option disabled selected>Select Parameter</option>
                        <option value="micro">Micro</option>
                        <option value="pychem">Pychem</option>
                    </select>
                </div>

                <div class="mb-3 micro">
                    <label>Micro Parameters</label>

                    @foreach ($micro_parameter as $data)
                        <div class="flex items-center mb-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                id="{{ $data->id }}" name="test_parameter" type="checkbox"
                                value="{{ $data->id }}">
                            <label class="ml-2 text-sm font-medium text-gray-900" for="{{ $data->id }}">
                                {{ $data->abbreviation }}, {{ $data->limit }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="mb-3 pychem hidden">
                    <label>PyChem Parameters</label>

                    @foreach ($pychem_parameter as $data)
                        <div class="flex items-center mb-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                id="{{ $data->id }}" name="test_parameter" type="checkbox"
                                value="{{ $data->id }}">
                            <label class="ml-2 text-sm font-medium text-gray-900" for="{{ $data->id }}">
                                {{ $data->abbreviation }}, {{ $data->limit }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>


@endsection
