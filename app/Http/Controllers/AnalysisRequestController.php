<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\LibraryTestParameter;
use App\Models\RawData;
use App\Models\TestParameter;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AnalysisRequestController extends Controller
{
    public function create(Request $request)
    {
        $query = $request->input('search');

        $clients = Client::query()
            ->where('account_name', 'LIKE', "%$query%")
            ->orWhere('client_id', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->orWhere('municipality_or_city', 'LIKE', "%$query%")
            ->paginate(10);
        return view('service.analysis_request.create', compact('query', 'clients'));
    }

    public function form($account_number)
    {
        $micro_parameter = LibraryTestParameter::query()
        ->where('type', 'micro')
        ->get();

        $pychem_parameter = LibraryTestParameter::query()
        ->where('type', 'pychem')
        ->get();        
        
        $clients = Client::find($account_number);
        return view('service.analysis_request.form', compact(
            'clients',
            'micro_parameter',
            'pychem_parameter',
        ));
    }

    public function store(Request $request)
    {
        if (AnalysisRequest::count() === 0) {
            $currentAnalysisID = 1;
        } else {
            $currentAnalysisID = AnalysisRequest::latest()->first()->analysis_id + 1;
        }

        // Get the current date
        $currentDate = now();

        // Get the month and date components
        $month = $currentDate->format('n') - 1; // Convert to 0-based index
        $date = $currentDate->format('d');

        // Convert month to your desired pattern
        $monthPattern = chr(65 + $month); // 'A' corresponds to January, 'B' to February, and so on

        // Format the date to be 2 digits (e.g., 01, 02, ..., 31)
        $formattedDate = str_pad($date, 2, '0', STR_PAD_LEFT);

        // Combine the month pattern and formatted date
        $result = $monthPattern . $formattedDate. $currentAnalysisID;

        $request->validate([
            // 'account_number' => 'unique:analysis_requests',
            'collector_name' => 'required',
            'date_collected' => 'required',
            'time_collected' => 'required',
            'collection_point' => 'required',
            'sampling_location_address' => 'required',
            'uvlight' => 'required',
            'chlorinator' => 'required',
            // 'faucet_condition' => 'required', deleted
            'source_of_water_sample' => 'required',
            'type_of_water' => 'required',
            'water_purpose' => 'required',
            'test_parameters' => 'required',
        ]);

        $input = $request->all();
        $input['date_next_schedule'] = Carbon::parse($input['date_collected'])->addDays(31);
        $input['analysis_id_'] = $result;

        $selectedParameters = $request->input('rawr', []);

        $analysisRequest = AnalysisRequest::create($input);
        RawData::create([
            'analysis_id' => $analysisRequest->analysis_id,
        ]);
        LabAcceptance::create([
            'analysis_id' => $analysisRequest->analysis_id,
        ]);

        foreach ($selectedParameters as $parameterValue) {
            TestParameter::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters' => $parameterValue, // Change to a different attribute name
            ]);
        }

        return redirect()
            ->back()
            ->with(['message' => 'Analysis Request has been created successfully!']);
    }

    public function index(Request $request)
    {
        $query = $request->input('search');
        $requests = AnalysisRequest::query()
            ->where('analysis_id', 'LIKE', "%$query%")
            ->orWhere('collector_name', 'LIKE', "%$query%")
            ->orWhere('date_collected', 'LIKE', "%$query%")


            ->paginate(10);
        return view('record_and_report.analysis_request.index', compact('requests', 'query'));
    }

    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);
        return view('record_and_report.analysis_request.details', compact('details'));
    }
}