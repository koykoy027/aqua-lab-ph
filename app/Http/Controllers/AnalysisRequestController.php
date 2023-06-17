<?php

namespace App\Http\Controllers;
use App\Models\AnalysisRequest;
use App\Models\Client;
use App\Models\RawData;
use Illuminate\Http\Request;

class AnalysisRequestController extends Controller
{
    public function create(){
        return view('service.analysis_request.create');
    }

    public function form($account_number){
        $clients = Client::find($account_number);
        return view('service.analysis_request.form', compact('clients'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'account_number' => 'unique:analysis_requests',
            'collector_name' => 'required',
            'date_collected'=> 'required',
            'time_collected'=> 'required',
            'collection_point'=> 'required',
            'sampling_location_address'=> 'required',
            'uvlight'=> 'required',
            'chlorinator'=> 'required',
            'faucet_condition'=> 'required',
            'source_of_water_sample'=> 'required',
            'water_purpose'=> 'required',
            'test_parameters'=> 'required',
        ]);

        $analysisRequest = AnalysisRequest::create($request->all());
        RawData::create([
            'analysis_id' => $analysisRequest->analysis_id,
            // other Micro attributes
        ]);
        return redirect()->back()->with(['message' => 'Analysis Request has been created successfully!']);
    }

    public function index(){
        $requests = AnalysisRequest::orderByDesc('created_at')
        ->paginate(10);
        return view('record_and_report.analysis_request.index', compact('requests'));
    }

    public function details($analysis_id){
        $details = AnalysisRequest::find($analysis_id);
        return view('record_and_report.analysis_request.details', compact('details'));
    }


}