<?php

namespace App\Http\Controllers;

use App\Models\Chem1;
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

    // public function chem2(Request $request){

    //     $request->validate([
    //         'chem1_instrument_reading_1' => 'required',
    //         'chem1_instrument_reading_2' => 'required',
    //         'chem1_instrument_reading_3' => 'required',
    //         'chem1_average_instrument_reading' => 'required',
    //         'chem1_final_result' => 'required',
    //         'chem1_final_result_remarks' => 'required',
    //     ]);

    //     Chem1::create($request->all());
    //     return redirect()->back()->with(['message' => 'CHEM1 - pH Computation Success']);

    // }
}
