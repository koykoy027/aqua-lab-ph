<?php

namespace App\Http\Controllers;

use App\Models\Chem1;
use App\Models\Chem10;
use App\Models\Chem2;
use App\Models\Chem3;
use App\Models\Chem4;
use App\Models\Chem5;
use App\Models\Chem6;
use App\Models\Chem7;
use App\Models\Chem9;
use Illuminate\Http\Request;

class ChemsController extends Controller
{
    public function chem1(Request $request){

        $request->validate([
            'chem1_instrument_reading_1' => 'required',
            'chem1_instrument_reading_2' => 'required',
            'chem1_instrument_reading_3' => 'required',
            'chem1_average_instrument_reading' => 'required',
            'chem1_final_result' => 'required',
            'chem1_final_result_remarks' => 'required',
        ]);

        Chem1::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM1 - pH Computation Success']);

    }

    public function chem2(Request $request){

        $request->validate([
            'chem2_instrument_reading_1' => 'required',
            'chem2_instrument_reading_2' => 'required',
            'chem2_instrument_reading_3' => 'required',
            'chem2_average_instrument_reading' => 'required',
            'chem2_final_result' => 'required',
            'chem2_final_result_remarks' => 'required',
        ]);

        Chem2::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM2 - Nitrate Computation Success']);

    }

    
    public function chem3(Request $request){

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

        Chem3::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM3 - Total Dissolved Solids Computation Success']);

    }

    public function chem4(Request $request){

        $request->validate([
            'chem4_instrument_reading' => 'required',
            'chem4_final_result' => 'required',
            'chem4_final_result_remarks' => 'required',
        ]);

        Chem4::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM4 - Chlorine (Residual), Computation Success']);

    }

    public function chem5(Request $request){

        $request->validate([
            'chem5_instrument_reading_1' => 'required',
            'chem5_instrument_reading_2' => 'required',
            'chem5_instrument_reading_3' => 'required',
            'chem5_average_instrument_reading' => 'required',
            'chem5_final_result' => 'required',
            'chem5_final_result_remarks' => 'required',
        ]);

        Chem5::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM5 - Arsenic Computation Success']);

    }

    public function chem6(Request $request){

        $request->validate([
            'chem6_instrument_reading_1' => 'required',
            'chem6_instrument_reading_2' => 'required',
            'chem6_instrument_reading_3' => 'required',
            'chem6_average_instrument_reading' => 'required',
            'chem6_final_result' => 'required',
            'chem6_final_result_remarks' => 'required',
        ]);

        Chem6::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM6 - Cadmium Computation Success']);

    }

    public function chem7(Request $request){

        $request->validate([
            'chem7_instrument_reading_1' => 'required',
            'chem7_instrument_reading_2' => 'required',
            'chem7_instrument_reading_3' => 'required',
            'chem7_average_instrument_reading' => 'required',
            'chem7_final_result' => 'required',
            'chem7_final_result_remarks' => 'required',
        ]);

        Chem7::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM7 - Lead Computation Success']);

    }

    public function chem9(Request $request){

        $request->validate([
            'chem9_instrument_reading_1' => 'required',
            'chem9_instrument_reading_2' => 'required',
            'chem9_instrument_reading_3' => 'required',
            'chem9_average_instrument_reading' => 'required',
            'chem9_final_result' => 'required',
            'chem9_final_result_remarks' => 'required',
        ]);

        Chem9::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM9 - Iron Computation Success']);

    }

    public function chem10(Request $request){

        $request->validate([
            'chem10_instrument_reading_1' => 'required',
            'chem10_instrument_reading_2' => 'required',
            'chem10_instrument_reading_3' => 'required',
            'chem10_average_instrument_reading' => 'required',
            'chem10_final_result' => 'required',
            'chem10_final_result_remarks' => 'required',
        ]);

        Chem10::create($request->all());
        return redirect()->back()->with(['message' => 'CHEM10 - Manganese Computation Success']);

    }

}
