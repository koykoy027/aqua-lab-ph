@extends('layouts.app')
@section('title', 'Create Raw Data File')
@section('content')


    <div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
        <div class="mb-3 bg-white card">
            <label for="sampleID">Sample ID</label>
            <input id="sampleID" type="text" value="{{ $rawDataFile->analysis_id_ }}" readonly>
        </div>
    </div>

    @if ($rawDataFile->test_parameters == 'micro')
        <form action="{{ route('laboratory.lab-work-order-form.micro', ['analysis_id' => $requests->analysis_id]) }}"
            method="POST">
            @csrf
            @foreach ($test_parameters as $test_parameter)
                @foreach ($library_test_parameters as $library_test_parameter)
                    @if ($test_parameter->test_parameters == $library_test_parameter->id)
                        @include('laboratory.lab_work_order.partials.micro.' . $library_test_parameter->filename)
                    @endif
                @endforeach
            @endforeach

            <div class="flex justify-end gap-2">
                <button class="btn btn-primary" name="remarks" value="Testing on-going">Save</button>
                <button class="btn btn-primary" name="remarks" value="For approval">Save and Exit</button>
                <button class="btn btn-primary" name="remarks" value="For releasing">Save and Submit</button>
            </div>
        </form>

    @endif

    @if ($rawDataFile->test_parameters == 'pychem')
    <form action="{{ route('laboratory.lab-work-order-form.pychem', ['analysis_id' => $requests->analysis_id]) }}"
            method="POST">
            @csrf
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters == $library_test_parameter->id)
                    @include('laboratory.lab_work_order.partials.pychem.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
        <div class="flex justify-end gap-2">
            <button class="btn btn-primary" name="remarks" value="Testing on-going">Save</button>
            <button class="btn btn-primary" name="remarks" value="For approval">Save and Exit</button>
            <button class="btn btn-primary" name="remarks" value="For releasing">Save and Submit</button>
        </div>
    </form>
    @endif



@endsection
