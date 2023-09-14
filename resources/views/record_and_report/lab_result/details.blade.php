@extends('layouts.app')
@section('title', 'Lab Result All Details')
@section('content')

    <div class="card bg-white">
        <div class="flex justify-between">
            <div>
                <button class="btn category-button border-b-2 border-blue-500 text-blue-500" onclick="categoryClientInformation()">Client Information</button>
                <button class="btn category-button" onclick="categoryAnalysisRequest()">Analysis Request</button>
                <button class="btn category-button" onclick="categoryLabAcceptance()">Lab Acceptance</button>
                <button class="btn category-button" onclick="categoryRawData()">Raw Data File</button>
            </div>
            <div>
                {{-- <a target="_blank" title="Generate PDF" " class="font-medium text-blue-600 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                        </svg>
                    </a> --}}
                    <a target="_blank" title="Generate PDF" href="{{ route('record-and-report.analysis-request.generateAnalysisPdf', ['analysis_id' => $analysis->analysis_id]) }}" class="font-medium text-blue-600 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                        </svg>
                    </a>
                </div>
            </div>


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
                @if ($analysis->test_parameters === 'micro')
                    @foreach ($test_parameters as $test_parameter)
                        @foreach ($library_test_parameters as $library_test_parameter)
                            @if ($test_parameter->test_parameters === $library_test_parameter->id)
                                @include('record_and_report.lab_result.partials.raw_data_partials.micro.' . $library_test_parameter->filename)
                            @endif
                        @endforeach
                    @endforeach
                @endif

                {{-- @if ($analysis->test_parameters === 'pychem')
                    @foreach ($test_parameters as $test_parameter)
                        @foreach ($library_test_parameters as $library_test_parameter)
                            @if ($test_parameter->test_parameters === $library_test_parameter->id)
                                @include('record_and_report.lab_result.partials.raw_data_partials.phys.' . $library_test_parameter->filename)
                            @endif
                        @endforeach
                    @endforeach
                @endif --}}

                @if ($analysis->test_parameters === 'pychem')
                    @foreach ($test_parameters as $test_parameter)
                        @foreach ($library_test_parameters as $library_test_parameter)
                            @if ($test_parameter->test_parameters === $library_test_parameter->id)
                                @include('record_and_report.lab_result.partials.raw_data_partials.chem.' . $library_test_parameter->filename)
                            @endif
                        @endforeach
                    @endforeach
                @endif
            </div>

        </div>

@endsection
