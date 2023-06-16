@extends('layouts.app')
@section('title', 'Lab Result All Details')
@section('content')

    <div class="card bg-white">
        <button class="btn category-button border-b-2 border-blue-500 text-blue-500" onclick="categoryClientInformation()">Client Information</button>
        <button class="btn category-button" onclick="categoryAnalysisRequest()">Analysis Request</button>
        <button class="btn category-button" onclick="categoryLabAcceptance()">Lab Acceptance</button>
        <button class="btn category-button" onclick="categoryRawData()">Raw Data File</button>

        <div class="category categoryClientInformation">
            @include('record_and_report.lab_result.partials.client')
        </div>

        <div class="category categoryAnalysisRequest hidden">
            @include('record_and_report.lab_result.partials.analysis_request')
        </div>

        <div class="category categoryLabAcceptance hidden">
            @include('record_and_report.lab_result.partials.lab_acceptance')
        </div>

        <div class="category categoryRawData hidden">
            @include('record_and_report.lab_result.partials.raw_data')
        </div>
    </div>

@endsection
