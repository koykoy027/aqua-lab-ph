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

    public function micro()
    {
        $analysisRequest = AnalysisRequest::query()

        ->where('test_parameters', 'MICR1 - Heterotrophic Plate Count (HPC)')
        ->orWhere('test_parameters', 'MICR2 - Thermotolerant Colifom Test')
        ->orWhere('test_parameters', 'MICR3 - Total Coliform')
        ->orWhere('test_parameters', 'MICR4 - E. coli Test')
        ->orWhere('test_parameters', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->whereNot('remarks', 'Pending')
        ->whereNot('remarks', 'Rejected')
        ->whereNot('remarks', 'Disapprove')

        ->orderByDesc('updated_at')
        ->paginate(10);

        return view('laboratory.lab_work_order.index', compact('analysisRequest'));
    }

    public function pychem()
    {
        $analysisRequest = AnalysisRequest::query()
        ->whereNot('remarks', 'Pending')
        ->whereNot('remarks', 'Rejected')
        ->whereNot('test_parameters', 'MICR1 - Heterotrophic Plate Count (HPC)')
        ->whereNot('test_parameters', 'MICR2 - Thermotolerant Colifom Test')
        ->whereNot('test_parameters', 'MICR3 - Total Coliform')
        ->whereNot('test_parameters', 'MICR4 - E. coli Test')
        ->whereNot('test_parameters', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->orderByDesc('updated_at')
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
        $analysisRequest = AnalysisRequest::find($analysis_id);
        $test_parameters = $analysisRequest->test_parameters; // find value of test parameters
        $lab->update($request->all());

        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        if(
            $test_parameters === 'MICR1 - Heterotrophic Plate Count (HPC)' OR
            $test_parameters === 'MICR2 - Thermotolerant Colifom Test' OR
            $test_parameters === 'MICR3 - Total Coliform' OR
            $test_parameters === 'MICR4 - E. coli Test' OR
            $test_parameters === 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)'
        ){
            return redirect()->route('service.lab-result-status.micro')->with(['message' => 'Lab acceptance has been created successfully!']);
        }
        else{
            return redirect()->route('service.lab-result-status.pychem')->with(['message' => 'Lab acceptance has been created successfully!']);
        }

    }

}
