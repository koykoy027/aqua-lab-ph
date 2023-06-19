<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;

class CreateRawDataFileController extends Controller
{
    public function create($analysis_id){
        $requests = LabAcceptance::find($analysis_id);
        $rawDataFile = AnalysisRequest::find($requests->analysis_id);
        $rawDataFileValue = RawData::find($requests->analysis_id);

        return view('laboratory.lab_work_order.create', compact('requests', 'rawDataFile', 'rawDataFileValue'));
    }
}