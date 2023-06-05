@extends('layouts.app')
@section('title', 'Add Analysis Request Form')
@section('content')
    @if ($errors->any())
        <div id="alert-3" class="mb-4 flex rounded-lg bg-red-50 p-4 text-red-800" role="alert">
            <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-green-400"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif


    @if (session()->has('message'))
        <div id="alert-3" class="mb-4 flex rounded-lg bg-green-50 p-4 text-green-800" role="alert">
            <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Success! {{ session('message') }}
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 rounded-lg bg-green-50 p-1.5 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">Account Information</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="account_name">Account Name</label>
                <input id="account_name" type="text" name="account_name" value="{{ $clients->account_name }}" readonly>

            </div>
            <div class="mb-3">
                <label for="account_number">Account Number</label>
                <input id="account_number" type="text" name="account_number" value="{{ $clients->account_number }}"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="name_of_owner">Name of owner</label>
                <input id="name_of_owner" type="text" name="name_of_owner" value="{{ $clients->name_of_owner }}"
                    readonly>
            </div>
        </div>


        <h1 class="mb-3 mt-3">Address</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
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
                <label for="province">Province</label>
                <input id="province" type="text" name="province" value="{{ $clients->province }}" readonly>
            </div>
        </div>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">

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
        <h1 class="mb-3 mt-3">Contact information</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">


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


    </div>


    <form method="POST" action="{{ route('service.add-analysis-request.store') }}">
        @csrf
        <input id="account_number" type="hidden" name="account_number" value="{{ $clients->account_number }}"
            readonly>
        <div class="card mb-3 bg-white">
            <h1 class="mb-3">Sample Collection</h1>
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
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
                    <label for="date_collected">Date Colected</label>
                    <input id="date_collected" type="date" name="date_collected" value="{{ old('date_collected') }}"
                        required autofocus autocomplete="date_collected">
                    @error('date_collected')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="time_collected">Time Colected</label>
                    <input id="time_collected" type="time" name="time_collected" value="{{ old('time_collected') }}"
                        required autofocus autocomplete="time_collected">
                    @error('time_collected')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
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

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="sampling_location_address">Address of Collection Point Sampling address is the same with
                        the Account Address</label>
                    <select name="sampling_location_address" id="sampling_location_address"
                        value="{{ old('sampling_location_address') }}" required autofocus
                        autocomplete="sampling_location_address" onchange="samplingLocationAddress(this.value)">
                        <option value="Faucet">Faucet</option>
                        <option value="Pump">Pump</option>
                        <option value="Others">Others</option>
                    </select>
                    @error('sampling_location_address')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sampling_location_address_others">Sampling Location , if others</label>
                    <input id="sampling_location_address_others" type="text" name="sampling_location_address_others"
                        value="{{ old('sampling_location_address_others') }}" required autofocus
                        autocomplete="sampling_location_address_others" readonly>
                    @error('sampling_location_address_others')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="">UV Light</label>
                    <div class="flex justify-evenly">
                        <div class="mr-4 flex items-center">
                            <input id="uvlightNA" type="radio" value="N/A" name="uvlight"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="uvlightNA" class="ml-2 text-sm font-medium text-gray-900">N/A</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input id="uvlightON" type="radio" value="ON" name="uvlight"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="uvlightON" class="ml-2 text-sm font-medium text-gray-900">ON</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input id="uvlightOFF" type="radio" value="OFF" name="uvlight"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="uvlightOFF" class="ml-2 text-sm font-medium text-gray-900">OFF</label>
                        </div>
                    </div>
                    @error('uvlight')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="">Chlorinator</label>
                    <div class="flex justify-evenly">
                        <div class="mr-4 flex items-center">
                            <input id="chlorinatorNA" type="radio" value="N/A" name="chlorinator"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="chlorinatorNA" class="ml-2 text-sm font-medium text-gray-900">N/A</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input id="chlorinatorON" type="radio" value="ON" name="chlorinator"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="chlorinatorON" class="ml-2 text-sm font-medium text-gray-900">ON</label>
                        </div>
                        <div class="mr-4 flex items-center">
                            <input id="chlorinatorOFF" type="radio" value="OFF" name="chlorinator"
                                class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                            <label for="chlorinatorOFF" class="ml-2 text-sm font-medium text-gray-900">OFF</label>
                        </div>
                    </div>
                    @error('uvlight')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="faucet_condition">Faucet Condition after Disinfection</label>
                    <input id="faucet_condition" type="text" name="faucet_condition"
                        value="{{ old('faucet_condition') }}" required autofocus autocomplete="faucet_condition">
                    @error('faucet_condition')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-white">
            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
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

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
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
            </div>

            <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
                <div class="mb-3">
                    <label for="test_parameters">Test Parameters</label>
                    <select name="test_parameters" id="test_parameters" value="{{ old('test_parameters') }}" required
                        autofocus autocomplete="test_parameters" onchange="sourceOfWaterSample(this.value)">
                        <option value="MICR1 - Heterophobic Plate Count (HPC)">MICR1 - Heterophobic Plate Count (HPC)
                        </option>
                        <option value="MICR2 - Thermotolerant Coliform Test">MICR2 - Thermotolerant Coliform Test</option>
                        <option value="MICR3 - Coliform Total">MICR3 - Coliform Total</option>
                        <option value="MICR4 - E. Coliform Test">MICR4 - E. Coliform Test</option>
                        <option value="MICR5 - All 3 Mandatory Microbiological Parameters">MICR5 - All 3 Mandatory
                            Microbiological Parameters</option>
                        <option value="CHEM1 - PH">CHEM1 - PH</option>
                        <option value="CHEM2 - Nitrate">CHEM2 - Nitrate</option>
                        <option value="CHEM3 - Total Dissolved Solids">CHEM3 - Total Dissolved Solids</option>
                        <option value="CHEM4 - Chlorine (Residual) as free">CHEM4 - Chlorine (Residual) as free</option>
                        <option value="CHEM5 - Arsenic">CHEM5 - Arsenic</option>
                    </select>
                    @error('test_parameters')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>


@endsection
