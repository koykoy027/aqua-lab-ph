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
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function micro(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->orWhere('analysis_id_', 'LIKE', "%$query%");
            });

        $requests = $queryBuilder
            ->whereIn('test_parameters', ['micro'])
            ->whereHas('labAcceptance', function ($query) {
                $query->whereIn('remarks', ['Approve', 'Testing on-going', 'For approval', 'For releasing']);
            })
            ->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests', 'query'));
    }

    public function phyChem(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = AnalysisRequest::query()
            ->where(function ($search) use ($query) {
                $search->where('collector_name', 'LIKE', "%$query%")
                    ->orWhere('test_parameters', 'LIKE', "%$query%")
                    ->orWhere('analysis_id_', 'LIKE', "%$query%");

            });

        $requests = $queryBuilder
            ->whereIn('test_parameters', ['pychem', 'chem', 'phys'])
            ->whereHas('labAcceptance', function ($query) {
                $query->whereIn('remarks', ['Approve', 'Testing on-going', 'For approval', 'For releasing']);
            })
            ->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests', 'query'));
    }

    public function details($analysis_id)
    {

        $requests = LabAcceptance::find($analysis_id);
        $lab_approval = AnalysisRequest::find($analysis_id);

        $micro1 = Micro1::where('analysis_id', $analysis_id)->get();
        $micro2 = Micro2::where('analysis_id', $analysis_id)->get();
        $micro3 = Micro3::where('analysis_id', $analysis_id)->get();
        $micro4 = Micro4::where('analysis_id', $analysis_id)->get();

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

        return view('laboratory.lab_approval.details', compact(
            'requests',
            'lab_approval',
            'test_parameters',
            'library_test_parameters',
            'micro1',
            'micro2',
            'micro3',
            'micro4',
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
            'phys4'
        ));
    }

    public function approveOrDisapprove(Request $request, $analysis_id)
    {
        $btnApproveOrDisapprove = $request->btnApproveOrDisapprove;

        $labAcceptance = LabAcceptance::findOrFail($analysis_id);
        $labAcceptance->update(['remarks' => $btnApproveOrDisapprove]);


        $findPendingInLabAcceptance = LabAcceptance::query()
            ->whereHas('analysisRequest', function ($queryBuilder) use ($labAcceptance) {

                if ($labAcceptance->analysisRequest->test_parameters == 'micro') {
                    $queryBuilder->where('test_parameters', 'micro');
                } else {
                    $queryBuilder->whereIn('test_parameters', ['phys', 'chem']);
                }
            })
            ->whereIn('remarks', ['Testing on-going', 'For approval', 'For releasing'])
            ->first();

        if ($findPendingInLabAcceptance) {
            return redirect()
                ->route('laboratory.lab_approval.details', $findPendingInLabAcceptance->id)
                ->with(['message' => 'Sample ID: ' . $labAcceptance->sample_id . ' has been ' . $btnApproveOrDisapprove . '. Redirect to Sample ID: ' . $findPendingInLabAcceptance->sample_id]);
        } else {
            $routeName = $labAcceptance->analysisRequest->test_parameters == 'micro' ? 'laboratory.lab_approval.micro' : 'laboratory.lab_approval.phyChem';
            return redirect()
                ->route($routeName)
                ->with(['message' => 'No more Pending Samples.']);
        }
    }
}
