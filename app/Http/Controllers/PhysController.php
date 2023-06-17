<?php

namespace App\Http\Controllers;

use App\Models\RawData;
use Illuminate\Http\Request;

class PhysController extends Controller
{
    public function phys1(Request $request){

        $request->validate([
            'phys1_observation' => 'required',
            'phys1_final_result' => 'required',
            'phys1_final_result_remarks' => 'required',
        ]);

        RawData::create($request->all());
        return redirect()->back()->with(['message' => 'MICR1 - Heterotrophic Plate Count (HPC) Computation Success']);

    }

    public function phys2(Request $request){

        $request->validate([
            'phys2_observation' => 'required',
            'phys2_final_result' => 'required',
            'phys2_final_result_remarks' => 'required',
        ]);

        RawData::create($request->all());
        return redirect()->back()->with(['message' => 'MICR1 - Heterotrophic Plate Count (HPC) Computation Success']);

    }

    public function phys3(Request $request){

        $request->validate([
            'phys3_concentration_of_comparable_color_standard' => 'required',
            'phys3_final_result' => 'required',
            'phys3_final_result_remarks' => 'required',
        ]);

        RawData::create($request->all());
        return redirect()->back()->with(['message' => 'MICR1 - Heterotrophic Plate Count (HPC) Computation Success']);

    }

    public function phys4(Request $request){

        $request->validate([
            'phys4_instrument_reading_1' => 'required',
            'phys4_instrument_reading_2' => 'required',
            'phys4_instrument_reading_3' => 'required',
        ]);

        RawData::create($request->all());
        return redirect()->back()->with(['message' => 'MICR1 - Heterotrophic Plate Count (HPC) Computation Success']);

    }
}