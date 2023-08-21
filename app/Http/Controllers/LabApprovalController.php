<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function micro(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
        ->whereIn('test_parameters', [
            'MICR1 - Heterotrophic Plate Count (HPC)',
            'MICR2 - Thermotolerant Coliform Test',
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

        $requests = $queryBuilder->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests', 'query'));
    }

    public function phyChem(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
        ->whereNotIn('test_parameters', [
            'MICR1 - Heterotrophic Plate Count (HPC)',
            'MICR2 - Thermotolerant Coliform Test',
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

        $requests = $queryBuilder->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests', 'query'));
    }



    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);

        $lab_approval = RawData::find($details->analysis_id);

        return view('laboratory.lab_approval.details', compact('details' , 'lab_approval'));
    }

    public function approval($analysis_id){

        $lab = AnalysisRequest::findOrFail($analysis_id);
        $lab->update(['remarks' => 'Approve']);

        $analysis = AnalysisRequest::findOrFail($analysis_id);
        $analysis->update(['remarks' => 'Approve']);

        return redirect()->back()->with(['message' => 'Approve']);

    }

    public function disapprove($analysis_id){

        $lab = AnalysisRequest::findOrFail($analysis_id);
        $lab->update(['remarks' => 'Disapprove']);

        $analysis = AnalysisRequest::findOrFail($analysis_id);
        $analysis->update(['remarks' => 'Disapprove']);

        return redirect()->back()->with(['message' => 'Disapprove']);

    }

}