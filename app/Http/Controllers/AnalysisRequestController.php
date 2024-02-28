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
use App\Models\Micro6A;
use App\Models\Phys1;
use App\Models\Phys2;
use App\Models\Phys3;
use App\Models\Phys4;
use App\Models\RawData;
use App\Models\TestParameter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $library_test_parameter = LibraryTestParameter::where('is_show', true) // pansamantala
            ->orderBy('sequence', 'asc')
            ->get();
        $micro_parameter = LibraryTestParameter::query()
            ->where('type', 'micro')
            ->get();

        $chem_parameter = LibraryTestParameter::query()
            ->where('type', 'chem')
            ->get();

        $phys_parameter = LibraryTestParameter::query()
            ->where('type', 'chem')
            ->orWhere('type', 'phys')
            ->get();


        $clients = Client::find($account_number);
        return view('service.analysis_request.form', compact(
            'clients',
            'library_test_parameter',
            'micro_parameter',
            'chem_parameter',
            'phys_parameter',
        ));
    }

    public function store(Request $request)
    {
        // dd($request->date_collected);
        DB::beginTransaction();

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

        try {

            $input = $request->all();
            $libraryTestParameter = LibraryTestParameter::all(); // fetch all parameters

            // Combine the month pattern and formatted date

            // Get the current date
            $currentDate = now();

            // Get the month and date components
            $month = $currentDate->format('n') - 1; // Convert to 0-based index
            $date = $currentDate->format('d');

            // Convert month to your desired pattern
            $monthPattern = chr(65 + $month); // 'A' corresponds to January, 'B' to February, and so on

            // Format the date to be 2 digits (e.g., 01, 02, ..., 31)
            $formattedDate = str_pad($date, 2, '0', STR_PAD_LEFT);

            foreach ($libraryTestParameter as $data) {
                $test_parameters_dropdown =  $input['test_parameters']; // get the value of selected parameters in dropdown

                if ($test_parameters_dropdown == $data->id) {
                    $selected = $data->type;
                }
            }

            $totalMicro = AnalysisRequest::where('test_parameters', 'micro')->count();
            $totalPyChem = AnalysisRequest::where('test_parameters', 'chem')
                ->orWhere('test_parameters', 'phys')
                ->count();

            $totalMicroFormatted = str_pad($totalMicro, 2, '0', STR_PAD_LEFT);
            $totalPyChemFormatted = str_pad($totalPyChem, 2, '0', STR_PAD_LEFT);

            if ($selected == "chem" || $selected == "phys") {
                $result = $monthPattern . $formattedDate . $totalPyChemFormatted + 1 . "PC";
            } else {
                $result = $monthPattern . $formattedDate . $totalMicroFormatted + 1;
            }

            $input['date_next_schedule'] = Carbon::parse($input['date_collected'])->addDays(31);
            $input['test_parameters'] = $selected;


            $analysisRequest = AnalysisRequest::create($input);
            LabAcceptance::create([
                'analysis_id' => $analysisRequest->analysis_id,
                'remarks' => 'Pending',
            ]);


            $selectedParameters = $request->input('selectedParameters', []);

            if (in_array(1, $selectedParameters) || $test_parameters_dropdown == 1 || in_array(6, $selectedParameters) || $test_parameters_dropdown == 6 || $test_parameters_dropdown == 7) {
                Micro1::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 1,
                ]);
            }

            if (in_array(3, $selectedParameters) || $test_parameters_dropdown == 3 || in_array(6, $selectedParameters) || $test_parameters_dropdown == 6 || $test_parameters_dropdown == 8 || $test_parameters_dropdown == 10) {

                Micro2::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 3,
                ]);
            }
            if (in_array(4, $selectedParameters) || $test_parameters_dropdown == 4 || in_array(6, $selectedParameters) || $test_parameters_dropdown == 6 || $test_parameters_dropdown == 8 || $test_parameters_dropdown == 9 || $test_parameters_dropdown == 10) {

                Micro3::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 4,
                ]);
            }

            if (in_array(69, $selectedParameters) || $test_parameters_dropdown == 69 || $test_parameters_dropdown == 7) {

                Micro3_9223B::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 69,
                ]);
            }
            if (in_array(5, $selectedParameters) || $test_parameters_dropdown == 5 || $test_parameters_dropdown == 9) {

                Micro4::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 5,
                ]);
            }
            if (in_array(70, $selectedParameters) || $test_parameters_dropdown == 70 || $test_parameters_dropdown == 7) {

                Micro4_9223B::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 70,
                ]);
            }
            if (in_array(11, $selectedParameters) || $test_parameters_dropdown == 11) {

                Micro6A::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 11,
                ]);
            }
            if (in_array(13, $selectedParameters) || $test_parameters_dropdown == 13) {

                Chem1::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 13,
                ]);
            }
            if (in_array(14, $selectedParameters) || $test_parameters_dropdown == 14) {

                Chem2::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 14,
                ]);
            }
            if (in_array(17, $selectedParameters) || $test_parameters_dropdown == 17) {

                Chem3::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 17,
                ]);
            }
            if (in_array(18, $selectedParameters) || $test_parameters_dropdown == 18) {

                Chem4::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 18,
                ]);
            }
            if (in_array(19, $selectedParameters) || $test_parameters_dropdown == 19) {

                Chem5::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 19,
                ]);
            }
            if (in_array(20, $selectedParameters) || $test_parameters_dropdown == 20) {

                Chem6::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 20,
                ]);
            }
            if (in_array(21, $selectedParameters) || $test_parameters_dropdown == 21) {

                Chem7::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 21,
                ]);
            }
            if (in_array(23, $selectedParameters) || $test_parameters_dropdown == 23) {

                Chem9::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 23,
                ]);
            }
            if (in_array(24, $selectedParameters) || $test_parameters_dropdown == 24) {

                Chem10::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 24,
                ]);
            }
            if (in_array(62, $selectedParameters) || $test_parameters_dropdown == 62) {

                Phys1::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 62,
                ]);
            }
            if (in_array(63, $selectedParameters) || $test_parameters_dropdown == 63) {

                Phys2::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 63,
                ]);
            }
            if (in_array(63, $selectedParameters) || $test_parameters_dropdown == 63) {

                Phys3::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 63,
                ]);
            }
            if (in_array(65, $selectedParameters) || $test_parameters_dropdown == 65) {

                Phys4::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters_id' => 65,
                ]);
            }

            foreach ($selectedParameters as $parameterValue) {
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => $parameterValue, // Change to a different attribute name
                ]);
            }


            if ($test_parameters_dropdown == 6) { // if dropdown = MICRO5
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 1,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 3,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 4,
                ]);
            } else if ($test_parameters_dropdown == 7) { // if dropdown = MICRO5B,
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 1,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 69,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 70,
                ]);
            } else if ($test_parameters_dropdown == 8) { // if dropdown = MICRO5C,
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 3,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 4,
                ]);
            } else if ($test_parameters_dropdown == 9) { // if dropdown = MICR5D,
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 4,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 5,
                ]);
            } else if ($test_parameters_dropdown == 10) { // if dropdown = MICR6,
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 3,
                ]);
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => 4,
                ]);
            }

            // 12 = MICROX,
            // 58 = CHEMX
            // 61 = PHYSX
            // 6 = MICRO5
            // 7 = MICRO5B
            if (
                $test_parameters_dropdown != 12 &&
                $test_parameters_dropdown != 58 &&
                $test_parameters_dropdown != 61 &&
                $test_parameters_dropdown != 6 &&
                $test_parameters_dropdown != 7 &&
                $test_parameters_dropdown != 8 &&
                $test_parameters_dropdown != 9 &&
                $test_parameters_dropdown != 10
            ) {
                TestParameter::create([
                    'analysis_id' => $analysisRequest->analysis_id,
                    'test_parameters' => $test_parameters_dropdown,
                ]);
            }

            DB::commit();

            return redirect()
                ->back()
                ->with(['message' => 'Analysis Request has been created successfully!'])
                ->withInput();
        } catch (\Exception $error) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Ooops... Something went wrong. Please try again.');
            // dd($error);
        }
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
                    ->orWhere('test_parameters', 'LIKE', "%$query");
            });
        }

        $requests = $queryBuilder->paginate(10);
        return view('record_and_report.analysis_request.index', compact('requests', 'query'));
    }
}
