<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\SampleCondition;
use Illuminate\Http\Request;

class LabAcceptanceController extends Controller
{
    public function index(Request $request)
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
                $search->where('analysis_id', 'LIKE', "%$query%")
                    ->orWhere('evaluated_by', 'LIKE', "%$query%")
                    ->orWhere('date_evaluated', 'LIKE', "%$query%")
                    ->orWhere('time_evaluated', 'LIKE', "%$query%");
            });
        }

        $acceptances = $acceptances->paginate(10); // Paginate the results

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
                    ->orWhere('remarks', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->where('test_parameters', 'micro');
            });
        }

        $analysisRequest = $queryBuilder
            ->where('test_parameters', 'micro')
            ->whereHas('labAcceptance', function ($query) {
                $query->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove']);
            })
            ->paginate(10);

        return view('laboratory.lab_work_order.index', compact('analysisRequest', 'query'));
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
                    ->orWhere('remarks', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove']);
            });
        }

        $analysisRequest = $queryBuilder
            ->whereIn('test_parameters', ['pychem', 'chem', 'phys'])
            ->whereHas('labAcceptance', function ($query) {
                $query->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove']);
            })
            ->paginate(10);

        return view('laboratory.lab_work_order.index', compact('analysisRequest', 'query'));
    }

    public function create($analysis_id)
    {
        // analysis_id
        $requests = AnalysisRequest::find($analysis_id);
        $acceptance = LabAcceptance::find($requests->analysis_id);
        $sampleCondition = SampleCondition::where('lab_acceptance', $acceptance->id)->get();
        $sampleConditionList = ["Complies with the requirement", "Leaking of with wet caps", "In another container", "Below required volume", "Expired"];

        return view('laboratory.lab_acceptance.create', compact('requests', 'acceptance', 'sampleCondition', 'sampleConditionList'));
    }

    public function store(Request $request, $analysis_id)
    {


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

        $AnalysisRequest = AnalysisRequest::find($analysis_id);

        if ($AnalysisRequest->test_parameters == "chem" || $AnalysisRequest->test_parameters == "phys") {
            $result = $monthPattern . $formattedDate . "PC";
        } else {
            $result = $monthPattern . $formattedDate;
        }

        $request->validate([
            'evaluated_by' => 'required',
            'date_evaluated' => 'required',
            'time_evaluated' => 'required',
            // 'sample_condition' => 'required',
            'remarks' => 'required',

        ]);


        $remarks = $request->remarks;

        $lab = LabAcceptance::findOrFail($analysis_id);
        $analysisRequest = AnalysisRequest::find($analysis_id);
        $test_parameters = $analysisRequest->test_parameters; // find value of test parameters
        $lab->update([
            'sample_id',
            'sample_id' => $result . $analysis_id,
            'analysis_id' => $request->analysis_id,
            'evaluated_by' => $request->evaluated_by,
            'date_evaluated' => $request->date_evaluated,
            'time_evaluated' => $request->time_evaluated,
            // 'sample_condition' => $request->sample_condition,
            'remarks' => $request->remarks,
            'if_remarks_are_rejected' => $request->if_remarks_are_rejected,
        ]);

        $selectedSampleCondition = $request->input('sample_condition', []);

        foreach ($selectedSampleCondition as $data) {
            SampleCondition::create([
                'lab_acceptance' => $lab->id,
                'name' => $data,
            ]);
        }


        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);
        $pendingFromLabAcceptance = LabAcceptance::query()


            ->whereHas('analysisRequest', function ($queryBuilder) use ($test_parameters) {
                if ($test_parameters == 'micro') {
                    $queryBuilder->where('test_parameters', 'micro');
                } else {
                    $queryBuilder->where('test_parameters', 'chem')
                        ->orWhere('test_parameters', 'phys');
                }
            })
            ->where('remarks', 'Pending')
            ->first();

        if ($pendingFromLabAcceptance) {
            return redirect()
                ->route('laboratory.lab-acceptance.create', $pendingFromLabAcceptance->analysis_id)
                ->with([
                    'message' => 'Lab acceptance has been created successfully! Redirect to next Pending acceptance'
                ]);
        } else {

            $routeName = ($analysisRequest->test_parameters == 'micro' ? 'service.lab-result-status.micro' : 'service.lab-result-status.pychem');
            return redirect()
                ->route($routeName)
                ->with([
                    'message' => 'Lab acceptance has been created successfully! No more Pending acceptance'
                ]);
        }

        // if (
        //     $test_parameters === 'micro'
        // ) {
        //     return redirect()->route('service.lab-result-status.micro')->with(['message' => 'Lab acceptance has been created successfully! Redirect to Raw Data File']);
        // } else {
        //     return redirect()->route('service.lab-result-status.pychem')->with(['message' => 'Lab acceptance has been created successfully! Redirect to Raw Data File']);
        // }

        // if ($remarks == "Rejected") {
        //     return redirect()->back()->with(['error' => 'Lab acceptance has been rejected']);
        // } else {
        //     return redirect()->route('laboratory.lab-work-order-form.create', $analysis_id)->with(['message' => 'Lab acceptance has been created successfully! Redirect to Raw Data File']);
        // }


    }
}
