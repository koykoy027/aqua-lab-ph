<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\RawData;
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function index()
    {
        $requests = AnalysisRequest::orderByDesc('created_at')
        ->orWhere('remarks', 'Accepted')
        ->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests'));
    }

    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);

        $lab_approval = RawData::find($details->analysis_id);

        return view('laboratory.lab_approval.details', compact('details' , 'lab_approval'));
    }


}