<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\LibraryTestParameter;
use App\Models\RawData;
use App\Models\TestParameter;
use Illuminate\Http\Request;

class CreateRawDataFileController extends Controller
{
    public function create($analysis_id)
    {
        $requests = LabAcceptance::find($analysis_id);
        $rawDataFile = AnalysisRequest::find($requests->analysis_id);
        $rawDataFileValue = RawData::find($requests->analysis_id);

        $test_parameters = TestParameter::query()
            ->where('analysis_id', $analysis_id)
            ->get();

        $library_test_parameters = LibraryTestParameter::all();

        return view('laboratory.lab_work_order.create', compact(
            'requests',
            'rawDataFile',
            'rawDataFileValue',
            'test_parameters',
            'library_test_parameters',
        ));
    }
}