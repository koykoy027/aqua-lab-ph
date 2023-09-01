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
use App\Models\Phys1;
use App\Models\Phys2;
use App\Models\Phys3;
use App\Models\Phys4;
use Illuminate\Http\Request;

class PyChemController extends Controller
{
    public function pychem(Request $request, $analysis_id)
    {

        if ($request->input('chem1_final_result_remarks') == !NULL) {
            $pychem = Chem1::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem2_final_result_remarks') == !NULL) {
            $pychem = Chem2::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem3_final_result_remarks') == !NULL) {
            $pychem = Chem3::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem4_final_result_remarks') == !NULL) {
            $pychem = Chem4::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem5_final_result_remarks') == !NULL) {
            $pychem = Chem5::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem6_final_result_remarks') == !NULL) {
            $pychem = Chem6::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem7_final_result_remarks') == !NULL) {
            $pychem = Chem7::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem9_final_result_remarks') == !NULL) {
            $pychem = Chem9::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('chem10_final_result_remarks') == !NULL) {
            $pychem = Chem10::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('phys1_final_result_remarks') == !NULL) {
            $pychem = Phys1::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('phys2_final_result_remarks') == !NULL) {
            $pychem = Phys2::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('phys3_final_result_remarks') == !NULL) {
            $pychem = Phys3::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }
        if ($request->input('phys4_final_result_remarks') == !NULL) {
            $pychem = Phys4::where('analysis_id', $analysis_id)->firstorFail();
            $pychem->update($request->all());
        }

        $remarks = $request->input('remarks');
        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);
        return redirect()->route('laboratory.lab-lab-work-order.pychem')->with(['message' => 'PyChem Test parameter has been saved!']);
    }
}
