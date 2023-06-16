
    <div class="card mb-3 bg-white">
        <h1 class="mb-3">Sample Collection</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="analysis_id">Analysis request ID</label>
                <input id="analysis_id" type="text" name="analysis_id" value="{{ $analysis->analysis_id }}" readonly
                    autofocus autocomplete="analysis_id">
            </div>

        </div>


        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="collector_name">Collector name</label>
                <input id="collector_name" type="text" name="collector_name" value="{{ $analysis->collector_name }}" readonly
                    autofocus autocomplete="collector_name">
            </div>
            <div class="mb-3">
                <label for="date_collected">Date Collected</label>
                <input id="date_collected" type="date" name="date_collected" value="{{ $analysis->date_collected }}"
                    readonly autofocus autocomplete="date_collected">

            </div>
            <div class="mb-3">
                <label for="time_collected">Time Colected</label>
                <input id="time_collected" type="time" name="time_collected" value="{{ $analysis->time_collected }}"
                    readonly autofocus autocomplete="time_collected">
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">

            <div class="mb-3">
                <label for="collection_point">Collection point</label>
                <input name="collection_point" id="collection_point"
                    value="{{ $analysis->collection_point === 'Others' ? $analysis->collection_point_others : $analysis->collection_point }}"
                    readonly autofocus autocomplete="collection_point">
            </div>

            <div class="mb-3">
                <label for="sampling_location_address">Address of Collection Point Sampling address is the same with
                    the Account Address</label>
                <input name="sampling_location_address" id="sampling_location_address"
                    value="{{ $analysis->sampling_location_address === 'Others' ? $analysis->sampling_location_address_others : $analysis->sampling_location_address }}"
                    readonly autofocus autocomplete="sampling_location_address">
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-3">
            <div class="mb-3">
                <label for="uvlight">UV Light</label>
                <input name="uvlight" id="uvlight" value="{{ $analysis->uvlight }}" readonly autofocus
                    autocomplete="uvlight">
            </div>

            <div class="mb-3">
                <label for="chlorinator">Chlorinator</label>
                <input name="chlorinator" id="chlorinator" value="{{ $analysis->chlorinator }}" readonly autofocus
                    autocomplete="chlorinator">


            </div>

            <div class="mb-3">
                <label for="faucet_condition">Faucet Condition after Disinfection</label>
                <input id="faucet_condition" type="text" name="faucet_condition" value="{{ $analysis->faucet_condition }}"
                    readonly autofocus autocomplete="faucet_condition">

            </div>
        </div>
    </div>

    <div class="card mb-3 bg-white">
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="source_of_water_sample">Source of Water Sample</label>
                <input name="source_of_water_sample" id="source_of_water_sample" value="{{ $analysis->source_of_water_sample === 'Others' ? $analysis->source_of_water_sample_others : $analysis->source_of_water_sample}}" readonly autofocus autocomplete="source_of_water_sample">
            </div>

            <div class="mb-3">
                <label for="water_purpose">Water Purpose</label>
                <input name="water_purpose" id="water_purpose" value="{{ $analysis->water_purpose === 'Others' ?  $analysis->water_purpose_others : $analysis->water_purpose }}" readonly autofocus autocomplete="water_purpose">
            </div>
        </div>

        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="test_parameters">Test Parameters</label>
                <input name="test_parameters" id="test_parameters" value="{{ $analysis->test_parameters }}" readonly
                    autofocus autocomplete="test_parameters">
            </div>
        </div>
    </div>
