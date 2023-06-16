@extends('layouts.app')
@section('title', 'Lab Result All Details')
@section('content')


<div class="card bg-white">




    <button class="btn border-b-2 text-blue-500" onclick="categoryClientInformation()">Client Information</button>
    <button class="btn border-b-2" onclick="categoryAnalysisRequest()">Analysis Request</button>
    <button class="btn border-b-2" onclick="categoryLabAcceptance()">Lab Acceptance</button>
    <button class="btn border-b-2" onclick="categoryRawData()">Raw Data File</button>


    <div class="categoryClientInformation">
        @include('record_and_report.lab_result.partials.client')
    </div>

    <div class="categoryAnalysisRequest hidden">
        @include('record_and_report.lab_result.partials.analysis_request')
    </div>

    <div class="categoryLabAcceptance hidden">
        @include('record_and_report.lab_result.partials.lab_acceptance')
    </div>

    <div class="categoryRawData hidden">
        {{-- @include('record_and_report.lab_result.partials.raw_data') --}}
    </div>


</div>

@endsection
