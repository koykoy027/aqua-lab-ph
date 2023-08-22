<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use Illuminate\Http\Request;

class LabAcceptanceController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $acceptances = LabAcceptance::query()
            ->where('analysis_id', 'LIKE', "%$query%")
            ->orWhere('evaluated_by', 'LIKE', "%$query%")
            ->orWhere('date_evaluated', 'LIKE', "%$query%")
            ->orWhere('time_evaluated', 'LIKE', "%$query%")
            ->orWhere('sample_condition', 'LIKE', "%$query%")

            ->paginate(10);
        return view('record_and_report.lab_acceptance.index', compact('acceptances', 'query'));
    }

    public function micro(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
            ->whereIn('test_parameters', [
                'MICR1 - Heterotrophic Plate Count (HPC)',
                'MICR2 - Thermotolerant Colifom Test',
                'MICR3 - Total Coliform',
                'MICR4 - E. coli Test',
                'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)'
            ])
            ->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove'])
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            });

        $analysisRequest = $queryBuilder->paginate(10);

        return view('laboratory.lab_work_order.index', compact('analysisRequest', 'query'));
    }

    public function pychem(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
            ->whereNotIn('test_parameters', [
                'MICR1 - Heterotrophic Plate Count (HPC)',
                'MICR2 - Thermotolerant Colifom Test',
                'MICR3 - Total Coliform',
                'MICR4 - E. coli Test',
                'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)'
            ])
            ->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove'])
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            });

        $analysisRequest = $queryBuilder->paginate(10);

        return view('laboratory.lab_work_order.index', compact('analysisRequest', 'query'));
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

        if (
            $test_parameters === 'MICR1 - Heterotrophic Plate Count (HPC)' or
            $test_parameters === 'MICR2 - Thermotolerant Colifom Test' or
            $test_parameters === 'MICR3 - Total Coliform' or
            $test_parameters === 'MICR4 - E. coli Test' or
            $test_parameters === 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)'
        ) {
            return redirect()->route('service.lab-result-status.micro')->with(['message' => 'Lab acceptance has been created successfully!']);
        } else {
            return redirect()->route('service.lab-result-status.pychem')->with(['message' => 'Lab acceptance has been created successfully!']);
        }
    }
}
