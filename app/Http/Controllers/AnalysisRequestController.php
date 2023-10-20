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
use App\Models\Micro4;
use App\Models\Phys1;
use App\Models\Phys2;
use App\Models\Phys3;
use App\Models\Phys4;
use App\Models\RawData;
use App\Models\TestParameter;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $result = $monthPattern . $formattedDate . $currentAnalysisID;

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

        // If <= 5 all are micro
        $test_parameters_dropdown =  $input['test_parameters'];
        if ($test_parameters_dropdown <= 5) {
            $input['test_parameters'] = 'micro';
        } else {
            $input['test_parameters'] = 'pychem';
        }


        $input['date_next_schedule'] = Carbon::parse($input['date_collected'])->addDays(31);
        $input['analysis_id_'] = $result;


        $analysisRequest = AnalysisRequest::create($input);
        RawData::create([
            'analysis_id' => $analysisRequest->analysis_id,
        ]);
        LabAcceptance::create([
            'analysis_id' => $analysisRequest->analysis_id,
        ]);


        $selectedParameters = $request->input('selectedParameters', []);



        if (in_array(1, $selectedParameters) || $test_parameters_dropdown == 1) {
            Micro1::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 1,
                'micr1_hpc_plate_a' => NULL,
                'micr1_hpc_plate_b' => NULL,
                'micr1_hpc_average' => NULL,
                'micr1_hpc_difference' => NULL,
                'micr1_hpc_final_result' => NULL,
                'micr1_hpc_remarks' => NULL,
            ]);
        }

        if (in_array(2, $selectedParameters) || $test_parameters_dropdown == 2) {

            Micro2::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 2,
            ]);
        }
        if (in_array(3, $selectedParameters) || $test_parameters_dropdown == 3) {

            Micro3::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 3,
            ]);
        }
        if (in_array(4, $selectedParameters) || $test_parameters_dropdown == 4) {

            Micro4::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 4,
            ]);
        }
        if (in_array(6, $selectedParameters) || $test_parameters_dropdown == 6) {

            Chem1::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 6,
            ]);
        }
        if (in_array(7, $selectedParameters) || $test_parameters_dropdown == 7) {

            Chem2::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 7,
            ]);
        }
        if (in_array(8, $selectedParameters) || $test_parameters_dropdown == 8) {

            Chem3::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 8,
            ]);
        }
        if (in_array(9, $selectedParameters) || $test_parameters_dropdown == 9) {

            Chem4::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 9,
            ]);
        }
        if (in_array(10, $selectedParameters) || $test_parameters_dropdown == 10) {

            Chem5::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 10,
            ]);
        }
        if (in_array(11, $selectedParameters) || $test_parameters_dropdown == 11) {

            Chem6::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 11,
            ]);
        }
        if (in_array(12, $selectedParameters) || $test_parameters_dropdown == 12) {

            Chem7::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 12,
            ]);
        }
        if (in_array(13, $selectedParameters) || $test_parameters_dropdown == 13) {

            Chem9::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 13,
            ]);
        }
        if (in_array(14, $selectedParameters) || $test_parameters_dropdown == 14) {

            Chem10::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 14,
            ]);
        }
        if (in_array(15, $selectedParameters) || $test_parameters_dropdown == 15) {

            Phys1::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 15,
            ]);
        }
        if (in_array(16, $selectedParameters) || $test_parameters_dropdown == 16) {

            Phys2::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 16,
            ]);
        }
        if (in_array(17, $selectedParameters) || $test_parameters_dropdown == 17) {

            Phys3::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 17,
            ]);
        }
        if (in_array(18, $selectedParameters) || $test_parameters_dropdown == 18) {

            Phys4::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters_id' => 18,
            ]);
        }


        foreach ($selectedParameters as $parameterValue) {
            TestParameter::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters' => $parameterValue, // Change to a different attribute name
            ]);
        }

        if ($test_parameters_dropdown != 5) {
            TestParameter::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'test_parameters' => $test_parameters_dropdown,
            ]);
        }



        return redirect()
            ->back()
            ->with(['message' => 'Analysis Request has been created successfully!']);
    }

    public function index(Request $request)
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
                    ->orWhere('test_parameters', 'LIKE', "%$query");
            });
        }

        $requests = $queryBuilder->paginate(10);
        return view('record_and_report.analysis_request.index', compact('requests', 'query'));
    }

    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);
        return view('record_and_report.analysis_request.details', compact('details'));
    }
}
