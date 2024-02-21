<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Chem1;
use App\Models\Chem10;
use App\Models\Chem2;
use App\Models\Chem3;
use App\Models\Chem4;
use App\Models\Chem5;
use App\Models\Chem6;
use App\Models\Chem7;
use App\Models\Chem9;
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\LibraryTestParameter;
use App\Models\Micro1;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro3_9223B;
use App\Models\Micro4;
use App\Models\Micro4_9223B;
use App\Models\Phys1;
use App\Models\Phys2;
use App\Models\Phys3;
use App\Models\Phys4;
use App\Models\RawData;
use App\Models\SampleCondition;
use App\Models\TestParameter;
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
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $queryBuilder = AnalysisRequest::query();

        if ($start_date || $end_date) {
            $queryBuilder->whereBetween('date_collected', [$start_date, $end_date]);
        }

        if ($query) {
            $queryBuilder->where(function ($search) use ($query) {
                $search->where('analysis_id', 'LIKE', "%$query%")
                    ->orWhere('collector_name', 'LIKE', "$query")
                    ->orWhere('date_collected', 'LIKE', "%$query");
            });
        }

        $datas = $queryBuilder->where('test_parameters', 'micro')->paginate(10);

        return view('service.lab_result_status.index', compact(
            'datas',
            'query',
            'start_date',
            'end_date'
        ));
    }

    public function pychem(Request $request)
    {
        $query = $request->input('search');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $queryBuilder = AnalysisRequest::query();


        if ($start_date || $end_date) {
            $queryBuilder->whereBetween('date_collected', [$start_date, $end_date]);
        }

        if ($query) {
            $queryBuilder->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "$query")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->orWhere('analysis_id_', 'LIKE', "%$query%");
            });
        }

        $datas = $queryBuilder
            ->where('test_parameters', 'chem')
            ->orWhere('test_parameters', 'phys')
            ->paginate(10);

        return view('service.lab_result_status.index', compact('datas', 'query'));
    }

    public function table(Request $request)
    {

        $query = $request->input('search');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $queryBuilder = AnalysisRequest::query();

        if ($start_date || $end_date) {
            $queryBuilder->whereBetween('date_collected', [$start_date, $end_date]);
        }

        if ($query) {
            $queryBuilder->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('test_parameters_type', 'LIKE', "%$query%")
                    ->orWhere('analysis_id_', 'LIKE', "%$query%");
            });
        }

        $datas = $queryBuilder
            ->whereHas('labAcceptance', function ($queryBuilder) use ($query) {
                $queryBuilder->where('remarks', 'Approve');
            })
            ->paginate(10);
        return view('record_and_report.lab_result.index', compact('datas', 'query'));
    }


    public function details($analysis_id)
    {
        $analysis = AnalysisRequest::find($analysis_id);

        $clients = Client::find($analysis->account_number);
        $acceptance = LabAcceptance::find($analysis_id);
        $sampleCondition = SampleCondition::where('lab_acceptance', $acceptance->id)->get();

        $micro1 = Micro1::where('analysis_id', $analysis_id)->get();
        $micro2 = Micro2::where('analysis_id', $analysis_id)->get();
        $micro3 = Micro3::where('analysis_id', $analysis_id)->get();
        $micr3_9223B = Micro3_9223B::where('analysis_id',$analysis_id)->first();
        $micro4 = Micro4::where('analysis_id', $analysis_id)->get();
        $micr4_9223B = Micro4_9223B::where('analysis_id',$analysis_id)->first();

        $chem1 = Chem1::where('analysis_id', $analysis_id)->get();
        $chem2 = Chem2::where('analysis_id', $analysis_id)->get();
        $chem3 = Chem3::where('analysis_id', $analysis_id)->get();
        $chem4 = Chem4::where('analysis_id', $analysis_id)->get();
        $chem5 = Chem5::where('analysis_id', $analysis_id)->get();
        $chem6 = Chem6::where('analysis_id', $analysis_id)->get();
        $chem7 = Chem7::where('analysis_id', $analysis_id)->get();
        $chem9 = Chem9::where('analysis_id', $analysis_id)->get();
        $chem10 = Chem10::where('analysis_id', $analysis_id)->get();

        $phys1 = Phys1::where('analysis_id', $analysis_id)->get();
        $phys2 = Phys2::where('analysis_id', $analysis_id)->get();
        $phys3 = Phys3::where('analysis_id', $analysis_id)->get();
        $phys4 = Phys4::where('analysis_id', $analysis_id)->get();

        $test_parameters = TestParameter::query()
            ->where('analysis_id', $analysis_id)
            ->get();

        $library_test_parameters = LibraryTestParameter::all();

        return view('record_and_report.lab_result.details', compact(
            'analysis',
            'clients',
            'acceptance',
            'test_parameters',
            'library_test_parameters',
            'micro1',
            'micro2',
            'micro3',
            'micr3_9223B',
            'micro4',
            'micr4_9223B',
            'chem1',
            'chem2',
            'chem3',
            'chem4',
            'chem5',
            'chem6',
            'chem7',
            'chem9',
            'chem10',
            'phys1',
            'phys2',
            'phys3',
            'phys4',
            'sampleCondition',
        ));
    }
}
