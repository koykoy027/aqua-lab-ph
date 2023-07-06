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
        $requests = AnalysisRequest::orderByDesc('created_at')
        ->where('test_parameters', 'MICR1 - Heterotrophic Plate Count (HPC)')
        ->orWhere('test_parameters', 'MICR2 - Thermotolerant Colifom Test')
        ->orWhere('test_parameters', 'MICR3 - Total Coliform')
        ->orWhere('test_parameters', 'MICR4 - E. coli Test')
        ->orWhere('test_parameters', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->paginate(10);

        return view('laboratory.lab_approval.index', compact('requests'));
    }

    public function phyChem()
    {
        $requests = AnalysisRequest::orderByDesc('created_at')
        ->where('test_parameters', 'CHEM1 - pH')
        ->orWhere('test_parameters', 'CHEM2 - Nitrate')
        ->orWhere('test_parameters', 'CHEM3 - Total Dissolved Solids')
        ->orWhere('test_parameters', 'CHEM4 - Chlorine (Residual), as free')
        ->orWhere('test_parameters', 'CHEM5 - Arsenic')
        ->orWhere('test_parameters', 'CHEM6 - Cadmium')
        ->orWhere('test_parameters', 'CHEM7 - Lead')
        ->orWhere('test_parameters', 'CHEM8 - All Twenty (20) Mandatory Chemical Parameters (DOH AO 2013-003 Dialysis Water)')
        ->orWhere('test_parameters', 'CHEM9 - Iron')
        ->orWhere('test_parameters', 'CHEM10 - Manganese')
        ->orWhere('test_parameters', 'PHCH1 - All Nine (9) Mandatory Physical and Chemical Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->orWhere('test_parameters', 'PHYS1 - Appearance')
        ->orWhere('test_parameters', 'PHYS2 - Odor')
        ->orWhere('test_parameters', 'PHYS3 - Color, apparent')
        ->orWhere('test_parameters', 'PHYS4 - Turbidity')

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
