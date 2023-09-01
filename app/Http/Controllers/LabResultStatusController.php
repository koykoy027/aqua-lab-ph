<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LabResultStatusController extends Controller
{
    // public function index(){

    //     $query = AnalysisRequest::orderByDesc('created_at');

    //     if (Auth::user()->role === 'Micro Manager' || Auth::user()->role === 'Micro Analyst') {
    //         $query->orWhere('test_parameters', 'MICR1 - Heterotrophic Plate Count (HPC)')
    //         ->orWhere('test_parameters', 'MICR2 - Thermotolerant Colifom Test')
    //         ->orWhere('test_parameters', 'MICR3 - Total Coliform')
    //         ->orWhere('test_parameters', 'MICR4 - E. coli Test')
    //         ->orWhere('test_parameters', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)');
    //     }
    //     if (Auth::user()->role === 'Pchem Manager' || Auth::user()->role === 'Pchem Analyst') {

    //         $query->where('test_parameters', 'CHEM1 - pH')
    //         ->orWhere('test_parameters', 'CHEM2 - Nitrate')
    //         ->orWhere('test_parameters', 'CHEM3 - Total Dissolved Solids')
    //         ->orWhere('test_parameters', 'CHEM4 - Chlorine (Residual), as free')
    //         ->orWhere('test_parameters', 'CHEM5 - Arsenic')
    //         ->orWhere('test_parameters', 'CHEM6 - Cadmium')
    //         ->orWhere('test_parameters', 'CHEM7 - Lead')
    //         ->orWhere('test_parameters', 'CHEM8 - All Twenty (20) Mandatory Chemical Parameters (DOH AO 2013-003 Dialysis Water)')
    //         ->orWhere('test_parameters', 'CHEM9 - Iron')
    //         ->orWhere('test_parameters', 'CHEM10 - Manganese')
    //         ->orWhere('test_parameters', 'PHCH1 - All Nine (9) Mandatory Physical and Chemical Parameters (PNSDW 2017/DOH AO 2013-003)')
    //         ->orWhere('test_parameters', 'PHYS1 - Appearance')
    //         ->orWhere('test_parameters', 'PHYS2 - Odor')
    //         ->orWhere('test_parameters', 'PHYS3 - Color, apparent')
    //         ->orWhere('test_parameters', 'PHYS4 - Turbidity');
    //     }

    //     $datas = $query->paginate(10);
    //     return view('service.lab_result_status.index', compact('datas'));
    // }

    public function micro(Request $request)
    {
        $query = $request->input('search');

        $queryBuilder = AnalysisRequest::query()
            ->where('test_parameters', 'micro')
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "$query")
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            });
        $datas = $queryBuilder->paginate(10);

        return view('service.lab_result_status.index', compact('datas', 'query'));
    }

    public function pychem(Request $request)
    {
        $query = $request->input('search');

        $queryBuilder = AnalysisRequest::query()
            ->where('test_parameters', 'pychem')
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "$query")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->orWhere('analysis_id_', 'LIKE', "%$query%");
            });
        $datas = $queryBuilder->paginate(10);

        return view('service.lab_result_status.index', compact('datas', 'query'));
    }




    public function table(Request $request)
    {

        $query = $request->input('search');

        $queryBuilder = AnalysisRequest::query()
            ->where('remarks', 'Approve')
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "$query")
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            });
        $datas = $queryBuilder->paginate(10);
        return view('record_and_report.lab_result.index', compact('datas', 'query'));
    }


    public function details($analysis_id)
    {

        $analysis = AnalysisRequest::find($analysis_id);

        $clients = Client::find($analysis->account_number);
        $acceptance = LabAcceptance::find($analysis->analysis_id);
        $rawData = RawData::find($analysis->analysis_id);

        return view('record_and_report.lab_result.details', compact('analysis', 'clients', 'acceptance', 'rawData'));
    }
}
