<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\Micro1;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro3_9223B;
use App\Models\Micro4;
use App\Models\Micro4_9223B;
use App\Models\Micro6A;
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
        if ($request->input('micr3_9223b_no_of_yellow_wells_rxn_after_18h') == !NULL) {
            $micro = Micro3_9223B::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }
        if ($request->input('micr4_final_result') == !NULL) {
            $micro = Micro4::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }

        if ($request->input('micr4_9223b_no_of_yellow_flourescent_wells_rxn_after_18h') == !NULL) {
            $micro = Micro4_9223B::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }
        if ($request->input('micro6a_hpc_plate_a') == !NULL) {
            $micro = Micro6A::where('analysis_id', $analysis_id)->firstOrFail();
            $micro->update($request->all());
        }
        // dd($request->all());

        $remarks = $request->input('remarks');
        LabAcceptance::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);



        $acceptedAndConditionallyAcceptedFromLabAcceptance = LabAcceptance::query()
            ->whereHas('analysisRequest', function ($queryBuilder) {
                $queryBuilder->where('test_parameters', 'micro');
            })
            ->where(function ($query) {
                $query->where('remarks', 'Accepted')
                    ->orWhere('remarks', 'Conditionally Accepted');
            })
            ->first();


        if ($acceptedAndConditionallyAcceptedFromLabAcceptance) {
            return redirect()
                ->route('laboratory.lab-work-order-form.create', $acceptedAndConditionallyAcceptedFromLabAcceptance->analysis_id)
                ->with([
                    'message' => 'Test parameter has been saved! Redirect to Sample ID: ' . $acceptedAndConditionallyAcceptedFromLabAcceptance->sample_id,
                ]);
        } else {
            return redirect()
                ->route('laboratory.lab-lab-work-order.micro')
                ->with([
                    'message' => 'Test parameter has been saved! No more Pending samples for Micro'
                ]);
        }

        // return redirect()->route('laboratory.lab-lab-work-order.micro')->with(['message' => 'Micro Test parameter has been saved! Redirect to Lab Approval']);
        // return redirect()->route('laboratory.lab_approval.details', $analysis_id)->with(['message' => 'Micro Test parameter has been saved! Redirect to Lab Approval']);
    }
}
