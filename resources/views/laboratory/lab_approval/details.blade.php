@extends('layouts.app')
@section('title', 'Lab Approval Details')
@section('content')

<div class="grid gap-4 sm:gid-cols-1 lg:grid-cols-2">
    <div class="mb-3 bg-white card">
        <label for="sampleID">Sample ID</label>
        <input id="sampleID" type="text" value="{{ $lab_approval->labAcceptance->sample_id }}" readonly>
    </div>
</div>

{{-- micro --}}
@if ($lab_approval->test_parameters === 'micro')
    <form action="{{ route('laboratory.lab_approval.details', ['analysis_id' => $lab_approval->analysis_id]) }}" method="POST">
        @csrf
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters === $library_test_parameter->id)
                    @include('laboratory.lab_approval.partials.micro.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
    </form>
@endif

{{-- pychem --}}
@if ($lab_approval->test_parameters === 'pychem' || $lab_approval->test_parameters === 'chem' || $lab_approval->test_parameters === 'phys')
    <form action="{{ route('laboratory.lab_approval.details', ['analysis_id' => $lab_approval->analysis_id]) }}"
            method="POST">
            @csrf
        @foreach ($test_parameters as $test_parameter)
            @foreach ($library_test_parameters as $library_test_parameter)
                @if ($test_parameter->test_parameters === $library_test_parameter->id)
                    @include('laboratory.lab_approval.partials.pychem.' . $library_test_parameter->filename)
                @endif
            @endforeach
        @endforeach
    </form>
 @endif

<div class="flex justify-end gap-4">
    <form action="{{ route('laboratory.lab_approval.approveOrDisapprove', ['analysis_id' => $lab_approval->analysis_id]) }}" method="POST">
        @csrf
        <div class="flex justify-end">
            <input class="btn btn-primary" name="btnApproveOrDisapprove" type="submit" value="Approve"/>
            <input class="btn btn-primary" name="btnApproveOrDisapprove" type="submit" value="Disapprove"/>
        </div>
    </form>
</div>

@endsection
