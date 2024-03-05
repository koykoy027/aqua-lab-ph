<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\SampleCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabAcceptanceController extends Controller
{
    public function index(Request $request) // record and reports
    {
        $query = $request->input('search');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $acceptances = LabAcceptance::query();

        if ($start_date || $end_date) {
            $acceptances->whereBetween('date_evaluated', [$start_date, $end_date]);
        }

        if ($query) {
            $acceptances->where(function ($search) use ($query) {
                $search->where('sample_id', 'LIKE', "%$query%")
                    ->orWhere('evaluated_by', 'LIKE', "%$query%")
                    ->orWhere('date_evaluated', 'LIKE', "%$query%")
                    ->orWhere('time_evaluated', 'LIKE', "%$query%");
            });
        }

        $acceptances = $acceptances->paginate(10);

        return view('record_and_report.lab_acceptance.index', compact(
            'acceptances',
            'query',
            'start_date',
            'end_date'
        ));
    }

    public function details($analysis_id) // record and reports
    {
        $details = AnalysisRequest::find($analysis_id);
        return view('record_and_report.lab_acceptance.details', compact('details'));
    }


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
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->where('test_parameters', 'micro');
            })
                ->orWhereHas('labAcceptance', function ($queryBuilder) use ($query) {
                    $queryBuilder->where('sample_id', 'LIKE', "%$query%");
                });
        }

        $analysisRequest = $queryBuilder
            ->where('test_parameters', 'micro')
            ->whereHas('labAcceptance', function ($query) {
                $query->whereNotIn('remarks', ['Pending', 'Disapprove', 'Rejected']);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('laboratory.lab_work_order.index', compact(
            'analysisRequest',
            'query',
            'start_date',
            'end_date',
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
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            })
                ->orWhereHas('labAcceptance', function ($queryBuilder) use ($query) {
                    $queryBuilder->where('sample_id', 'LIKE', "%$query%");
                });
        }

        $analysisRequest = $queryBuilder
            ->whereIn('test_parameters', ['pychem', 'chem', 'phys'])
            ->whereHas('labAcceptance', function ($query) {
                $query->whereNotIn('remarks', ['Pending', 'Disapprove', 'Rejected']);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('laboratory.lab_work_order.index', compact(
            'analysisRequest',
            'query',
            'start_date',
            'end_date',
        ));
    }

    public function create($analysis_id)
    {
        // analysis_id
        $requests = AnalysisRequest::find($analysis_id);
        $acceptance = LabAcceptance::where('analysis_id', $requests->analysis_id)->first();
        $sampleCondition = SampleCondition::where('lab_acceptance', $acceptance->id)->get();
        $sampleConditionList = ["Complies with the requirement", "Leaking of with wet caps", "In another container", "Below required volume", "Expired"];

        return view('laboratory.lab_acceptance.create', compact('requests', 'acceptance', 'sampleCondition', 'sampleConditionList'));
    }

    public function store(Request $request, $analysis_id)
    {
        $request->validate([
            'evaluated_by' => 'required',
            'date_evaluated' => 'required',
            'time_evaluated' => 'required',
            'remarks' => 'required',
        ]);

        DB::beginTransaction();

        try {

            $remarks = $request->remarks;
            $currentDate = now(); // Get the current date
            // Get the month and date components
            $month = $currentDate->format('n') - 1; // Convert to 0-based index
            $date = $currentDate->format('d');

            // Convert month to your desired pattern
            $monthPattern = chr(65 + $month); // 'A' corresponds to January, 'B' to February, and so on

            $formattedDate = str_pad($date, 2, '0', STR_PAD_LEFT); // Format the date to be 2 digits (e.g., 01, 02, ..., 31)
            $findLabAcceptance = LabAcceptance::find($analysis_id);
            $findAnalysisRequest = AnalysisRequest::find($analysis_id);

            // start of format
            $plainFormat = $monthPattern . $formattedDate;

            $totalMicroSampleToday = LabAcceptance::whereDate('created_at', $currentDate->toDateString())
                ->whereHas('analysisRequest', function ($queryBuilder) use ($findAnalysisRequest) {
                    $queryBuilder->where('test_parameters', 'micro'); // find if micro or pychem
                })
                ->where('sample_id', '!=', null)
                ->count();
            $totalPyChemSampleToday = LabAcceptance::whereDate('created_at', $currentDate->toDateString())
                ->whereHas('analysisRequest', function ($queryBuilder) use ($findAnalysisRequest) {
                    $queryBuilder->where('test_parameters', '!=', 'micro'); // find if micro or pychem
                })
                ->where('sample_id', '!=', null)
                ->count();

            // dd($totalMicroSampleToday + 1);
            $totalMicroSampleTodaySampleFormat = $plainFormat . (str_pad($totalMicroSampleToday + 1, 2, '0', STR_PAD_LEFT));
            $totalPyChemSampleTodaySampleFormat = $plainFormat . (str_pad($totalPyChemSampleToday + 1, 2, '0', STR_PAD_LEFT)) . 'PC';
            $finalFormat = $findAnalysisRequest->test_parameters == 'micro' ? $totalMicroSampleTodaySampleFormat : $totalPyChemSampleTodaySampleFormat;
            // end of format

            if (!$findLabAcceptance->sample_id && $remarks != 'Rejected') {

                $findLabAcceptance->update([
                    'sample_id' => $finalFormat,
                ]);

                // store sample conditions [multiple checkbox]
                $selectedSampleCondition = $request->input('sample_condition', []);
                foreach ($selectedSampleCondition as $data) {
                    SampleCondition::create([
                        'lab_acceptance' => $findLabAcceptance->id,
                        'name' => $data,
                    ]);
                }
            }

            $findLabAcceptance->update([ // update all fields
                'evaluated_by' => $request->evaluated_by,
                'date_evaluated' => $request->date_evaluated,
                'time_evaluated' => $request->time_evaluated,
                'remarks' => $request->remarks,
                'if_remarks_are_rejected' => $request->if_remarks_are_rejected,
            ]);

            $pendingFromLabAcceptance = LabAcceptance::query()
                ->whereHas('analysisRequest', function ($queryBuilder) use ($findAnalysisRequest) {
                    if ($findAnalysisRequest->test_parameters == 'micro') {
                        $queryBuilder->where('test_parameters', 'micro');
                    } else {
                        $queryBuilder->where('test_parameters', 'chem')
                            ->orWhere('test_parameters', 'phys');
                    }
                })
                ->where('remarks', 'Pending')
                ->first();
            DB::commit();


            if ($pendingFromLabAcceptance) {
                return redirect()
                    ->route('laboratory.lab-acceptance.create', $pendingFromLabAcceptance->analysis_id)
                    ->with([
                        'message' => 'Lab acceptance has been created successfully! Redirect to next Pending acceptance'
                    ]);
            } else {

                $routeName = ($findAnalysisRequest->test_parameters == 'micro' ? 'service.lab-result-status.micro' : 'service.lab-result-status.pychem');
                return redirect()
                    ->route($routeName)
                    ->with([
                        'message' => 'Lab acceptance has been created successfully! No more Pending acceptance'
                    ]);
            }
        } catch (\Exception $error) {
            DB::rollBack();
            return redirect()->back('error', 'Ooops... Something went wrong. Please try again.');
        }
    }
}
