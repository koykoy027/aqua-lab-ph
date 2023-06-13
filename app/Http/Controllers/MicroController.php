<?php

namespace App\Http\Controllers;

use App\Models\Micro1;
use App\Models\Micro2;
use Illuminate\Http\Request;

class MicroController extends Controller
{
    public function micro1(Request $request){

        $request->validate([
            'micr1_hpc_plate_a' => 'required',
            'micr1_hpc_plate_b' => 'required',
            'micr1_hpc_average' => 'required',
            'micr1_hpc_difference' => 'required',
            'micr1_hpc_final_result' => 'required',
            'micr1_hpc_remarks' => 'required',
        ]);

        Micro1::create($request->all());
        return redirect()->back()->with(['message' => 'MICR1 - Heterotrophic Plate Count (HPC) Computation CSuccess']);
    }

    public function micro2(Request $request)
    {

        $request->validate([
            'micr2_tc_24' => 'required',
            'micr2_tc_48' => 'required',
            'micr2_tc_final_result' => 'required',
            'micr2_tc_remarks' => 'required',
        ]);

        Micro2::create($request->all());
        return redirect()->back()->with(['message' => 'MICR2 - Thermotolerant Coliform Test Computation CSuccess']);
    }
}