<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\LibraryTestParameter;
use App\Models\Micro1;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro4;
use App\Models\RawData;
use App\Models\TestParameter;
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function micro(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
            ->where('test_parameters', 'micro')
            ->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove'])
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            });

        $requests = $queryBuilder->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests', 'query'));
    }

    public function phyChem(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
            ->where('test_parameters', 'pychem')
            ->whereNotIn('remarks', ['Pending', 'Rejected', 'Disapprove'])
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('remarks', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%");
            });

        $requests = $queryBuilder->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests', 'query'));
    }

    public function details($analysis_id)
    {

        $requests = LabAcceptance::find($analysis_id);
        $lab_approval = AnalysisRequest::find($analysis_id);
        $rawDataFileValue = RawData::find($analysis_id);

        $micro1 = Micro1::where('analysis_id',$analysis_id)->get();
        $micro2 = Micro2::where('analysis_id',$analysis_id)->get();
        $micro3 = Micro3::where('analysis_id',$analysis_id)->get();
        $micro4 = Micro4::where('analysis_id',$analysis_id)->get();

        $test_parameters = TestParameter::query()
        ->where('analysis_id', $analysis_id)
        ->get();

        $library_test_parameters = LibraryTestParameter::all();

        return view('laboratory.lab_approval.details', compact
        ('requests',
        'lab_approval',
        'test_parameters',
        'library_test_parameters',
        'micro1',
        'micro2',
        'micro3',
        'micro4'));

    }

    public function approval($analysis_id)
    {

        $lab = AnalysisRequest::findOrFail($analysis_id);
        $lab->update(['remarks' => 'Approve']);

        $analysis = AnalysisRequest::findOrFail($analysis_id);
        $analysis->update(['remarks' => 'Approve']);

        return redirect()->back()->with(['message' => 'Approve']);
    }

    public function disapprove($analysis_id)
    {

        $lab = AnalysisRequest::findOrFail($analysis_id);
        $lab->update(['remarks' => 'Disapprove']);

        $analysis = AnalysisRequest::findOrFail($analysis_id);
        $analysis->update(['remarks' => 'Disapprove']);

        return redirect()->back()->with(['message' => 'Disapprove']);
    }
}
