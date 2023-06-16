@extends('layouts.app')
@section('title', 'Analysis request details')
@section('content')

<a href="{{ route('sample-pdf', ['analysis_id' => $details->analysis_id]) }}" class="font-medium text-blue-600 hover:underline">Generate Pdf Copy</a>

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">Sample Collection</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="analysis_id">Analysis request ID</label>
                <input id="analysis_id" type="text" name="analysis_id" value="{{ $details->analysis_id }}" readonly
                    autofocus autocomplete="analysis_id">
            </div>

        </div>


        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="collector_name">Collector name</label>
                <input id="collector_name" type="text" name="collector_name" value="{{ $details->collector_name }}" readonly
                    autofocus autocomplete="collector_name">
            </div>
            <div class="mb-3">
                <label for="date_collected">Date Collected</label>
                <input id="date_collected" type="text" name="date_collected" value="{{ $details->date_collected }}"
                    readonly autofocus autocomplete="date_collected">

            </div>
            <div class="mb-3">
                <label for="time_collected">Time Colected</label>
                <input id="time_collected" type="text" name="time_collected" value="{{ $details->time_collected }}"
                    readonly autofocus autocomplete="time_collected">
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">

            <div class="mb-3">
                <label for="collection_point">Collection point</label>
                <input name="collection_point" id="collection_point"
                    value="{{ $details->collection_point === 'Others' ? $details->collection_point_others : $details->collection_point }}"
                    readonly autofocus autocomplete="collection_point">
            </div>

            <div class="mb-3">
                <label for="sampling_location_address">Address of Collection Point Sampling address is the same with
                    the Account Address</label>
                <input name="sampling_location_address" id="sampling_location_address"
                    value="{{ $details->sampling_location_address === 'Others' ? $details->sampling_location_address_others : $details->sampling_location_address }}"
                    readonly autofocus autocomplete="sampling_location_address">
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="uvlight">UV Light</label>
                <input name="uvlight" id="uvlight" value="{{ $details->uvlight }}" readonly autofocus
                    autocomplete="uvlight">
            </div>

            <div class="mb-3">
                <label for="chlorinator">Chlorinator</label>
                <input name="chlorinator" id="chlorinator" value="{{ $details->chlorinator }}" readonly autofocus
                    autocomplete="chlorinator">


            </div>

            <div class="mb-3">
                <label for="faucet_condition">Faucet Condition after Disinfection</label>
                <input id="faucet_condition" type="text" name="faucet_condition" value="{{ $details->faucet_condition }}"
                    readonly autofocus autocomplete="faucet_condition">

            </div>
        </div>
    </div>

    <div class="card mb-3 bg-white">
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="source_of_water_sample">Source of Water Sample</label>
                <input name="source_of_water_sample" id="source_of_water_sample" value="{{ $details->source_of_water_sample === 'Others' ? $details->source_of_water_sample_others : $details->source_of_water_sample}}" readonly autofocus autocomplete="source_of_water_sample">
            </div>

            <div class="mb-3">
                <label for="water_purpose">Water Purpose</label>
                <input name="water_purpose" id="water_purpose" value="{{ $details->water_purpose === 'Others' ?  $details->water_purpose_others : $details->water_purpose }}" readonly autofocus autocomplete="water_purpose">
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="test_parameters">Test Parameters</label>
                <input name="test_parameters" id="test_parameters" value="{{ $details->test_parameters }}" readonly
                    autofocus autocomplete="test_parameters">
            </div>
        </div>
    </div>



@endsection
