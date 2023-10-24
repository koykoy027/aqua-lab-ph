<?php

namespace App\Http\Controllers;

use App\Models\RawData;
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

        $remarks = $request->input('remarks');
        LabAcceptance::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        // return redirect()->route('laboratory.lab-lab-work-order.micro')->with(['message' => 'Micro Test parameter has been saved!']);
        return redirect()->route('laboratory.lab_approval.details', $analysis_id)->with(['message' => 'Micro Test parameter has been saved!']);
    }
}
