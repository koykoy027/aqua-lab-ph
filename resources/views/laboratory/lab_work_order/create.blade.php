@extends('layouts.app')
@section('title', 'Create Raw Data File')
@section('content')


    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3 bg-white card">
            <label for="sampleID">Sample ID</label>
            <input id="sampleID" type="text" value="{{ $rawDataFile->analysis_id_ }}" readonly>
        </div>
    </div>

    @if ($rawDataFile->test_parameters === 'micro')
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters === $library_test_parameter->id)
                    @include('laboratory.lab_work_order.partials.micro.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
    @endif

    @if ($rawDataFile->test_parameters === 'pychem')
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters === $library_test_parameter->id)
                    @include('laboratory.lab_work_order.partials.pychem.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
    @endif

    

@endsection
