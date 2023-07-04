<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use Illuminate\Http\Request;

class LabAcceptanceController extends Controller
{
    public function index()
    {
        $acceptances = LabAcceptance::orderByDesc('created_at')
        ->paginate(10);
        return view('record_and_report.lab_acceptance.index', compact('acceptances'));
    }

    public function labWorkOrder()
    {
        $analysisRequest = AnalysisRequest::orderByDesc('created_at')

        ->paginate(10);
        return view('laboratory.lab_work_order.index', compact('analysisRequest'));
    }

    public function create($analysis_id)
    {
        // analysis_id
        $requests = AnalysisRequest::find($analysis_id);
        $acceptance = LabAcceptance::find($requests->analysis_id);
        return view('laboratory.lab_acceptance.create', compact('requests', 'acceptance'));
    }

    public function store(Request $request, $analysis_id)
    {

        $request->validate([
            'evaluated_by' => 'required',
            'date_evaluated' => 'required',
            'time_evaluated' => 'required',
            'sample_condition' => 'required',
            'remarks' => 'required',

        ]);


        $remarks = $request->remarks;

        $lab = LabAcceptance::findOrFail($analysis_id);
        $lab->update($request->all());

        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);
        return redirect()->back()->with(['message' => 'Lab acceptance has been created successfully!']);
    }

}
