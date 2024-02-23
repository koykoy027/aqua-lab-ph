<div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
    <div class="mb-3 bg-white card">
        <label for="sampleID">Sample ID</label>
        <input id="sampleID" type="text" value="{{ $analysis->labAcceptance->sample_id }}" readonly>
    </div>
</div>

<div class="hidden category categoryRawData">
    @if ($analysis->test_parameters === 'micro')
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters === $library_test_parameter->id)
                    @include('record_and_report.lab_result.partials.raw_data_partials.micro.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
    @endif

    @if ($analysis->test_parameters === 'pychem' || $analysis->test_parameters === 'chem' || $analysis->test_parameters === 'phys')
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters === $library_test_parameter->id)
                    @include('record_and_report.lab_result.partials.raw_data_partials.pychem.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
    @endif
</div>