<?php

namespace App\Http\Controllers;
use App\Models\AnalysisRequest;
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AnalysisRequestController extends Controller
{
    public function create(Request $request)
    {
        $query = $request->input('search');

        $clients = Client::query()
        ->where('account_name', 'LIKE', "%$query%")
        ->orWhere('account_number', 'LIKE', "%$query%")
        ->orWhere('email', 'LIKE', "%$query%")
        ->orWhere('municipality_or_city', 'LIKE', "%$query%")
        ->paginate(10);
        return view('service.analysis_request.create', compact('query', 'clients'));
    }

    public function form($account_number)
    {
        $clients = Client::find($account_number);
        return view('service.analysis_request.form', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'account_number' => 'unique:analysis_requests',
            'collector_name' => 'required',
            'date_collected' => 'required',
            'time_collected' => 'required',
            'collection_point' => 'required',
            'sampling_location_address' => 'required',
            'uvlight' => 'required',
            'chlorinator' => 'required',
            'faucet_condition' => 'required',
            'source_of_water_sample' => 'required',
            'water_purpose' => 'required',
            'test_parameters' => 'required',
        ]);

        $input = $request->all();
        $input['date_next_schedule'] = Carbon::parse($input['date_collected'])->addDays(31);

        $analysisRequest = AnalysisRequest::create($input);
        RawData::create([
            'analysis_id' => $analysisRequest->analysis_id,
        ]);
        LabAcceptance::create([
            'analysis_id' => $analysisRequest->analysis_id,
        ]);

        return redirect()
            ->back()
            ->with(['message' => 'Analysis Request has been created successfully!']);
    }

    public function index()
    {
        $requests = AnalysisRequest::paginate(10);
        return view('record_and_report.analysis_request.index', compact('requests'));
    }

    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);
        return view('record_and_report.analysis_request.details', compact('details'));
    }
}