<?php

namespace App\Http\Controllers;

use App\Models\Chem;
use App\Models\RawData;
use Illuminate\Http\Request;
class ChemController extends Controller
{
    public function chem1(Request $request, $analysis_id){

        $request->validate([
            'chem1_instrument_reading_1' => 'required',
            'chem1_instrument_reading_2' => 'required',
            'chem1_instrument_reading_3' => 'required',
            'chem1_average_instrument_reading' => 'required',
            'chem1_final_result' => 'required',
            'chem1_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM1 - pH Computation Success']);

    }

    public function chem2(Request $request, $analysis_id){

        $request->validate([
            'chem2_instrument_reading_1' => 'required',
            'chem2_instrument_reading_2' => 'required',
            'chem2_instrument_reading_3' => 'required',
            'chem2_average_instrument_reading' => 'required',
            'chem2_final_result' => 'required',
            'chem2_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM2 - Nitrate Computation Success']);

    }


    public function chem3(Request $request, $analysis_id){

        $request->validate([
            'chem3_initial_wt_of_evaporating_dish_replicate_1' => 'required',
            'chem3_final_wt_of_evaporating_dish_replicate_1' => 'required',
            'chem3_wt_of_residue_replicate_1' => 'required',
            'chem3_initial_wt_of_evaporating_dish_replicate_2' => 'required',
            'chem3_final_wt_of_evaporating_dish_replicate_2' => 'required',
            'chem3_wt_of_residue_replicate_2' => 'required',
            'chem3_average_wt_of_residue' => 'required',
            'chem3_final_result' => 'required',
            'chem3_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM3 - Total Dissolved Solids Computation Success']);

    }

    public function chem4(Request $request, $analysis_id){

        $request->validate([
            'chem4_instrument_reading' => 'required',
            'chem4_final_result' => 'required',
            'chem4_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM4 - Chlorine (Residual), Computation Success']);

    }

    public function chem5(Request $request, $analysis_id){

        $request->validate([
            'chem5_instrument_reading_1' => 'required',
            'chem5_instrument_reading_2' => 'required',
            'chem5_instrument_reading_3' => 'required',
            'chem5_average_instrument_reading' => 'required',
            'chem5_final_result' => 'required',
            'chem5_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM5 - Arsenic Computation Success']);

    }

    public function chem6(Request $request, $analysis_id){

        $request->validate([
            'chem6_instrument_reading_1' => 'required',
            'chem6_instrument_reading_2' => 'required',
            'chem6_instrument_reading_3' => 'required',
            'chem6_average_instrument_reading' => 'required',
            'chem6_final_result' => 'required',
            'chem6_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM6 - Cadmium Computation Success']);

    }

    public function chem7(Request $request, $analysis_id){

        $request->validate([
            'chem7_instrument_reading_1' => 'required',
            'chem7_instrument_reading_2' => 'required',
            'chem7_instrument_reading_3' => 'required',
            'chem7_average_instrument_reading' => 'required',
            'chem7_final_result' => 'required',
            'chem7_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM7 - Lead Computation Success']);

    }

    public function chem9(Request $request, $analysis_id){

        $request->validate([
            'chem9_instrument_reading_1' => 'required',
            'chem9_instrument_reading_2' => 'required',
            'chem9_instrument_reading_3' => 'required',
            'chem9_average_instrument_reading' => 'required',
            'chem9_final_result' => 'required',
            'chem9_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM9 - Iron Computation Success']);

    }

    public function chem10(Request $request, $analysis_id){

        $request->validate([
            'chem10_instrument_reading_1' => 'required',
            'chem10_instrument_reading_2' => 'required',
            'chem10_instrument_reading_3' => 'required',
            'chem10_average_instrument_reading' => 'required',
            'chem10_final_result' => 'required',
            'chem10_final_result_remarks' => 'required',
        ]);

        $micro = RawData::findOrFail($analysis_id);
        $micro->update($request->all());
        return redirect()->back()->with(['message' => 'CHEM10 - Manganese Computation Success']);

    }

}