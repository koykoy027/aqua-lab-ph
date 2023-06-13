<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function index()
    {
        $requests = AnalysisRequest::orderByDesc('created_at')
        ->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests'));
    }

    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);
        return view('laboratory.lab_approval.details', compact('details'));
    }
}