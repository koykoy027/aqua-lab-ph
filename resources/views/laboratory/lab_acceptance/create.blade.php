@extends('layouts.app')
@section('title', 'Lab Acceptance Form')
@section('content')

    <div class="mb-3 bg-white card">
        <h1 class="mb-3">Sample Collection</h1>
        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
            <div class="mb-3">
                <label for="collector_name">Collector name</label>
                <input id="collector_name" type="text" name="collector_name" value="{{ $requests->collector_name }}" disabled
                    autofocus autocomplete="collector_name">
            </div>
            <div class="mb-3">
                <label for="date_collected">Date Collected</label>
                <input id="date_collected" type="text" name="date_collected"
                    value="{{ \Carbon\Carbon::parse($requests->date_collected)->format('m/d/Y') }}" disabled autofocus
                    autocomplete="date_collected">
            </div>
            <div class="mb-3">
                <label for="time_collected">Time Collected</label>
                <input id="time_collected" type="time" name="time_collected" value="{{ $requests->time_collected }}"
                    disabled autofocus autocomplete="time_collected">
            </div>
        </div>

        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="collection_point">Collection point</label>
                <select name="collection_point" id="collection_point" disabled>
                    <option value="{{ $requests->collection_point }}">{{ $requests->collection_point }}</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="collection_point_others">Collection point , if others</label>
                <input id="collection_point_others" type="text" name="collection_point_others"
                    value="{{ $requests->collection_point_others }}" disabled autofocus
                    autocomplete="collection_point_others" readonly>
            </div>
        </div>

        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">

            <div class="mb-3">
                <label for="sampling_location_address_others">Address of Collection Point</label>
                <textarea id="sampling_location_address_others" rows="4" name="sampling_location_address_others" disabled
                    autofocus autocomplete="sampling_location_address_others" readonly>{{ $requests->sampling_location_address_others }}</textarea>
            </div>

            <div class="mb-3">
                <label for="uvlight">UV Light</label>
                <input id="uvlight" type="text" name="uvlight" value="{{ $requests->uvlight }}" disabled autofocus
                    autocomplete="uvlight" readonly>

                <label for="chlorinator">Chlorinator</label>
                <input id="chlorinator" type="text" name="chlorinator" value="{{ $requests->chlorinator }}" disabled
                    autofocus autocomplete="chlorinator" readonly>
            </div>

            {{-- <div class="mb-3">
            <label for="faucet_condition">Faucet Condition after Disinfection</label>
            <input id="faucet_condition" type="text" name="faucet_condition" value="{{ $requests->faucet_condition }}"
                disabled autofocus autocomplete="faucet_condition">
        </div> --}}

        </div>
    </div>

    <div class="mb-3 bg-white card">
        <h1 class="mb-3">Work Order</h1>
        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="source_of_water_sample">Source of Water Sample</label>
                <select name="source_of_water_sample" id="source_of_water_sample" disabled autofocus
                    autocomplete="source_of_water_sample" onchange="sourceOfWaterSample(this.value)">
                    <option value="{{ $requests->source_of_water_sample }}">{{ $requests->source_of_water_sample }}
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="source_of_water_sample_others">Source of Water Sample , if others</label>
                <input id="source_of_water_sample_others" type="text" name="source_of_water_sample_others"
                    value="{{ $requests->source_of_water_sample_others }}" disabled autofocus
                    autocomplete="source_of_water_sample_others" readonly>
            </div>
        </div>

        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="type_of_water">Type of Water</label>
                <select name="type_of_water" id="type_of_water" disabled autofocus autocomplete="type_of_water"
                    onchange="sourceOfWaterSample(this.value)">
                    <option value="{{ $requests->type_of_water }}">{{ $requests->type_of_water }}</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="type_of_water_others">Type of Water , if others</label>
                <input id="type_of_water_others" type="text" name="type_of_water_others"
                    value="{{ $requests->type_of_water_others }}" disabled autofocus
                    autocomplete="source_of_water_sample_others" readonly>
            </div>
        </div>

        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="water_purpose">Water Purpose</label>
                <select name="water_purpose" id="water_purpose" disabled autofocus autocomplete="water_purpose"
                    onchange="waterPurpose(this.value)">
                    <option value="{{ $requests->water_purpose }}">{{ $requests->water_purpose }}</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="water_purpose_others">Water Purpose , if others</label>
                <input id="water_purpose_others" type="text" name="water_purpose_others"
                    value="{{ $requests->water_purpose_others }}" disabled autofocus autocomplete="water_purpose_others"
                    readonly>
            </div>
        </div>

        <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
            <div class="mb-3">
                <label for="test_parameters_type">Test Parameters</label>
                <select name="test_parameters_type" id="test_parameters_type" disabled autofocus autocomplete="test_parameters_type">
                    <option value="{{ $requests->test_parameters_type }}">{{ $requests->test_parameters_type }}</option>
                </select>
            </div>
        </div>
    </div>

    <form action="{{ route('laboratory.lab-acceptance.store', ['analysis_id' => $requests->analysis_id]) }}"
        method="POST">
        @csrf
        <input name="analysis_id" type="hidden" value="{{ $requests->analysis_id }}">

        <div class="mb-3 bg-white card">
            <label>@yield('title')</label>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label for="evaluated_by">Evaluated By</label>
                    <input autocomplete="evaluated_by" autofocus id="evaluated_by" name="evaluated_by" required
                        type="text" value="{{ $acceptance->evaluated_by }}">
                    @error('evaluated_by')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date_evaluated">Date Evaluated</label>
                    @if ($acceptance->date_evaluated === null)
                        <input autocomplete="date_evaluated" id="date_evaluated" name="date_evaluated" required
                            type="date">
                    @else
                        <input autocomplete="date_evaluated" autofocus name="date_evaluated" required type="date"
                            value="{{ $acceptance->date_evaluated }}">
                    @endif
                    @error('date_evaluated')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const DateEvaluatedInput = document.getElementById("date_evaluated");

                        function getCurrentDate() {
                            const today = new Date();
                            const year = today.getFullYear();
                            const month = String(today.getMonth() + 1).padStart(2, '0');
                            const day = String(today.getDate()).padStart(2, '0');

                            const currentDate = `${year}-${month}-${day}`;
                            DateEvaluatedInput.value = currentDate;
                        }

                        if (DateEvaluatedInput) {
                            getCurrentDate();
                        }
                    });
                </script>


                <div class="mb-3">
                    <label for="time_evaluated">Time Evaluated</label>
                    {{-- <input autocomplete="time_evaluated" autofocus id="time_evaluated" name="time_evaluated" required
                        type="time" value="{{ $acceptance->time_evaluated }}"> --}}
                    @if ($acceptance->time_evaluated === null)
                        <input autocomplete="time_evaluated" autofocus id="time_evaluated" name="time_evaluated" required
                            type="time" value="{{ $acceptance->time_evaluated }}">
                    @else
                        <input autocomplete="time_evaluated" autofocus name="time_evaluated" required type="time"
                            value="{{ $acceptance->time_evaluated }}">
                    @endif
                    @error('time_evaluated')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <script>
                    // Get the input element by its ID
                    const timeEvaluatedInput = document.getElementById("time_evaluated");

                    // Function to set the current time
                    function setCurrentTime() {
                        const currentTime = new Date();
                        const hours = currentTime.getHours().toString().padStart(2, '0');
                        const minutes = currentTime.getMinutes().toString().padStart(2, '0');
                        const currentTimeString = `${hours}:${minutes}`;
                        timeEvaluatedInput.value = currentTimeString;
                    }

                    // Add an event listener to set the time when the page loads
                    window.addEventListener("load", setCurrentTime);
                </script>
            </div>

            <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-3">
                <div class="mb-3">
                    <label>Sample Condition</label>
                    @foreach ($sampleConditionList as $data)
                        <div class="flex items-center mb-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                id="{{ $data }}" name="sample_condition[]" type="checkbox"
                                value="{{ $data }}"
                                {{ $sampleCondition->contains('name', $data) ? 'checked' : '' }}>
                            <label class="ml-2 text-sm font-medium text-gray-900" for="{{ $data }}">
                                {{ $data }}
                            </label>
                        </div>
                        {{-- <div class="flex items-center mb-4">
                    <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        id="leaking_or_with_wet_caps" name="sample_condition[]" type="checkbox" value="{{ $data }}">
                    <label class="ml-2 text-sm font-medium text-gray-900" for="leaking_or_with_wet_caps">{{ $data
                        }}</label>
                </div>
                <div class="flex items-center mb-4">
                    <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        id="in_another_container" name="sample_condition[]" type="checkbox" value="{{ $data }}">
                    <label class="ml-2 text-sm font-medium text-gray-900" for="in_another_container">{{ $data }}</label>
                </div>
                <div class="flex items-center mb-4">
                    <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        id="below_required_volume" name="sample_condition[]" type="checkbox" value="{{ $data }}">
                    <label class="ml-2 text-sm font-medium text-gray-900" for="below_required_volume">{{ $data
                        }}</label>
                </div>
                <div class="flex items-center mb-4">
                    <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        id="expired" name="sample_condition[]" type="checkbox" value="{{ $data }}">
                    <label class="ml-2 text-sm font-medium text-gray-900" for="expired">{{ $data }}</label>
                </div> --}}
                    @endforeach

                    @error('sample_condition')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="remarks">Remarks</label>
                    <div class="flex flex-col">
                        <div class="flex items-center mr-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                id="remarksAccepted" name="remarks" type="radio" value="Accepted"
                                onchange="test(this.value)" {{ $acceptance->remarks === 'Accepted' ? 'checked' : '' }}>
                            <label class="ml-2 text-sm font-medium text-gray-900" for="remarksAccepted">Accepted</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                id="remarksConditionallyAccepted" name="remarks" type="radio"
                                value="Conditionally Accepted" onchange="test(this.value)"
                                {{ $acceptance->remarks === 'Conditionally Accepted' ? 'checked' : '' }}>
                            <label class="ml-2 text-sm font-medium text-gray-900"
                                for="remarksConditionallyAccepted">Conditionally Accepted</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                id="remarksRejected" name="remarks" type="radio" value="Rejected"
                                onchange="test(this.value)" {{ $acceptance->remarks === 'Rejected' ? 'checked' : '' }}>
                            <label class="ml-2 text-sm font-medium text-gray-900" for="remarksRejected">Rejected</label>
                        </div>
                    </div>
                    @error('remarks')
                        <span class="invalid" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="if_remarks_are_rejected">If remarks are rejected</label>
                        <input autocomplete="if_remarks_are_rejected" autofocus id="if_remarks_are_rejected"
                            name="if_remarks_are_rejected" readonly required type="text"
                            value="{{ $acceptance->if_remarks_are_rejected }}">
                        @error('if_remarks_are_rejected')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

            </div>
        </div>



        <div class="flex justify-end">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

@endsection
