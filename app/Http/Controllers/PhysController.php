<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;

use App\Models\RawData;
use Illuminate\Http\Request;

class PhysController extends Controller
{
    public function phys1(Request $request, $analysis_id)
    {

        $request->validate([
            'phys1_observation' => 'required',
            'phys1_final_result' => 'required',
            'phys1_final_result_remarks' => 'required',
        ]);

        $phys = RawData::findOrFail($analysis_id);
        $phys->update($request->all());
        $remarks = $request->input('remarks');
        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        return redirect()->route('laboratory.lab-lab-work-order.pychem')->with(['message' => 'PHYS1 - Appearance Computation Success']);
    }

    public function phys2(Request $request, $analysis_id)
    {

        $request->validate([
            'phys2_observation' => 'required',
            'phys2_final_result' => 'required',
            'phys2_final_result_remarks' => 'required',
        ]);

        $phys = RawData::findOrFail($analysis_id);
        $phys->update($request->all());
        $remarks = $request->input('remarks');
        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        return redirect()->route('laboratory.lab-lab-work-order.pychem')->with(['message' => 'PHYS2 - Odor Computation Success']);
    }

    public function phys3(Request $request, $analysis_id)
    {

        $request->validate([
            'phys3_concentration_of_comparable_color_standard' => 'required',
            'phys3_final_result' => 'required',
            'phys3_final_result_remarks' => 'required',
        ]);

        $phys = RawData::findOrFail($analysis_id);
        $phys->update($request->all());
        $remarks = $request->input('remarks');
        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        return redirect()->route('laboratory.lab-lab-work-order.pychem')->with(['message' => 'PHYS3 - Color, apparent Computation Success']);
    }

    public function phys4(Request $request, $analysis_id)
    {

        $request->validate([
            'phys4_instrument_reading_1' => 'required',
            'phys4_instrument_reading_2' => 'required',
            'phys4_instrument_reading_3' => 'required',
            'phys4_average_instrument_reading' => 'required',
            'phys4_final_result' => 'required',
            'phys4_final_result_remarks' => 'required',
        ]);

        $phys = RawData::findOrFail($analysis_id);
        $phys->update($request->all());
        $remarks = $request->input('remarks');
        AnalysisRequest::where('analysis_id', $analysis_id)->update(['remarks' => $remarks]);

        return redirect()->route('laboratory.lab-lab-work-order.pychem')->with(['message' => 'PHYS4 - Turbidity Computation Success']);
    }
}
