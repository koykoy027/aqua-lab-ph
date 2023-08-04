<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function micro()
    {
        $requests = AnalysisRequest::query()
        ->where('test_parameters', 'MICR1 - Heterotrophic Plate Count (HPC)')
        ->orWhere('test_parameters', 'MICR2 - Thermotolerant Colifom Test')
        ->orWhere('test_parameters', 'MICR3 - Total Coliform')
        ->orWhere('test_parameters', 'MICR4 - E. coli Test')
        ->orWhere('test_parameters', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->orderByDesc('updated_at')
        ->whereNot('remarks', 'Pending')
        ->paginate(10);

        return view('laboratory.lab_approval.index', compact('requests'));
    }

    public function phyChem()
    {
        $requests = AnalysisRequest::query()
        ->whereNot('remarks', 'Pending')
        ->whereNot('test_parameters', 'MICR1 - Heterotrophic Plate Count (HPC)')
        ->whereNot('test_parameters', 'MICR2 - Thermotolerant Colifom Test')
        ->whereNot('test_parameters', 'MICR3 - Total Coliform')
        ->whereNot('test_parameters', 'MICR4 - E. coli Test')
        ->whereNot('test_parameters', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->orderByDesc('updated_at')
        ->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests'));
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
