<?php

namespace App\Http\Controllers;

use App\Models\Micro;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro4;
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

        Micro::create($request->all());
        return redirect()->back()->with(['message' => 'MICR1 - Heterotrophic Plate Count (HPC) Computation Success']);
    }

    public function micro2(Request $request)
    {

        $request->validate([
            'micr2_tc_24' => 'required',
            'micr2_tc_48' => 'required',
            'micr2_tc_final_result' => 'required',
            'micr2_tc_remarks' => 'required',
        ]);

        Micro::create($request->all());
        return redirect()->back()->with(['message' => 'MICR2 - Thermotolerant Coliform Test Computation Success']);
    }

    public function micro3(Request $request)
    {

        $request->validate([
            'micr3_lauryl_24' => 'required',
            'micr3_lauryl_48' => 'required',
            'micr3_brillant_24' => 'required',
            'micr3_brillant_48' => 'required',
            'micr3_final_result' => 'required',
            'micr3_remarks' => 'required',
        ]);

        Micro::create($request->all());
        return redirect()->back()->with(['message' => 'MICR3 - Total Coliform Computation Success']);
    }

    public function micro4(Request $request)
    {
        $request->validate([
            'micr4_color_of_the_sample' => 'required',
            'micr4_fluorescence' => 'required',
            'micr4_final_result' => 'required',
        ]);

        Micro::create($request->all());
        return redirect()->back()->with(['message' => 'MICR4 - E. coli Test Computation Success']);
    }
}