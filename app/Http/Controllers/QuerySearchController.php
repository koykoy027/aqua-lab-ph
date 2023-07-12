<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\AnalysisRequest;
use Illuminate\Http\Request;

class QuerySearchController extends Controller
{
    public function client(Request $request)
    {
        $query = $request->input('search');

        $clients = Client::where('account_name', 'LIKE', "%$query%")
        ->orWhere('account_number', 'LIKE', "%$query%")
        ->orWhere('email', 'LIKE', "%$query%")
        ->orWhere('municipality_or_city', 'LIKE', "%$query%")
        ->orderByDesc('updated_at')
        ->paginate(10);

        return view('service.analysis_request.create', compact('clients'));
    }

    public function labAcceptanceSearch(Request $request)
    {
        $query = $request->input('search');

        $datas = AnalysisRequest::where('analysis_id', 'LIKE', "%$query%")
        ->orWhere('remarks', 'LIKE', "%$query%")
        ->orWhere('collector_name', 'LIKE', "%$query%")
        ->orWhere('date_collected', 'LIKE', "%$query%")
        ->orWhere('source_of_water_sample', 'LIKE', "%$query%")
        ->orWhere('source_of_water_sample_others', 'LIKE', "%$query%")
        ->orWhere('test_parameters', 'LIKE', "%$query%")        
        ->orderByDesc('updated_at')
        ->paginate(10);

        return view('service.lab_result_status.index', compact('datas'));
    }

    public function generateReportSearch(Request $request)
    {
        $query = $request->input('search');

        $datas = AnalysisRequest::where('analysis_id', 'LIKE', "%$query%")        
        ->orWhere('collector_name', 'LIKE', "%$query%")
        ->orWhere('date_collected', 'LIKE', "%$query%")        
        ->orderByDesc('updated_at')
        ->paginate(10);

        return view('record_and_report.lab_result.index', compact('datas'));
    }
    
    
}
