@extends('layouts.app')
@section('title', 'Analysis request details')
@section('content')



    <div class="card mb-3 bg-white">

        <div class="flex justify-between">
            <h1 class="mb-3">Sample Collection</h1>

            <div class="">
                <a target="_blank" title="Generate PDF" href="{{ route('record-and-report.analysis-request.generateAnalysisPdf', ['analysis_id' => $details->analysis_id]) }}" class="font-medium text-blue-600 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>
                </a>

            </div>
        </div>
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
