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
        $acceptances = LabAcceptance::orderByDesc('created_at')
        ->orWhere('remarks', '!=','Rejected')
        ->paginate(10);
        return view('laboratory.lab_work_order.index', compact('acceptances'));
    }

    public function create($analysis_id)
    {
        // analysis_id
        $requests = AnalysisRequest::find($analysis_id);
        return view('laboratory.lab_acceptance.create', compact('requests'));
    }

    public function store(Request $request, $analysis_id)
    {

        $request->validate([
            'analysis_id' => 'unique:lab_acceptance',
            'evaluated_by' => 'required',
            'date_evaluated' => 'required',
            'time_evaluated' => 'required',
            'sample_condition' => 'required',
            'remarks' => 'required',

        ]);


        $remarks = $request->remarks;
       
        LabAcceptance::create($request->all());
        
        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        return redirect()->back()->with(['message' => 'Lab acceptance has been created successfully!']);
    }

}