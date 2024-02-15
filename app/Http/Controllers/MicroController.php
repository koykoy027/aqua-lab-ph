<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\Micro1;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro4;
use Illuminate\Http\Request;

class MicroController extends Controller
{

    public function micro(Request $request, $analysis_id)
    {

        if ($request->input('micr1_hpc_remarks') == !NULL) {
            $micro = Micro1::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }

        if ($request->input('micr2_tc_remarks') == !NULL) {
            $micro = Micro2::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }
        if ($request->input('micr3_remarks') == !NULL) {
            $micro = Micro3::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }
        if ($request->input('micr4_final_result') == !NULL) {
            $micro = Micro4::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }
        $analysisRequest = AnalysisRequest::find($analysis_id);
        $remarks = $request->input('remarks');
        LabAcceptance::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);
        


        $acceptedAndConditionallyAcceptedFromLabAcceptance = LabAcceptance::query()
            ->whereHas('analysisRequest', function ($queryBuilder){
                $queryBuilder->where('test_parameters', 'micro');
            })
            ->where('remarks', 'Accepted')
            ->orWhere('remarks', 'Conditionally Accepted')
            ->first();

        if ($acceptedAndConditionallyAcceptedFromLabAcceptance) {
            return redirect()
                ->route('laboratory.lab-work-order-form.create', $acceptedAndConditionallyAcceptedFromLabAcceptance->analysis_id)
                ->with([
                    'message' => 'Micro Test parameter has been saved! Redirect to Sample ID: ' . $acceptedAndConditionallyAcceptedFromLabAcceptance->sample_id,
                ]);
        } else {
            $routeName = ($analysisRequest->test_parameters == 'micro' ? 'laboratory.lab-lab-work-order.micro' : 'laboratory.lab-lab-work-order.pychem');
            return redirect()
                ->route($routeName)
                ->with([
                    'message' => 'Micro Test parameter has been saved! No more Pending samples'
                ]);
        }

        // return redirect()->route('laboratory.lab-lab-work-order.micro')->with(['message' => 'Micro Test parameter has been saved! Redirect to Lab Approval']);
        // return redirect()->route('laboratory.lab_approval.details', $analysis_id)->with(['message' => 'Micro Test parameter has been saved! Redirect to Lab Approval']);
    }
}
