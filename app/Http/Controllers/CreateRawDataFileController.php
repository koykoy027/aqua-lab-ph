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
use App\Models\LabAcceptance;
use App\Models\LibraryTestParameter;
use App\Models\Micro1;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro4;
use App\Models\Phys1;
use App\Models\Phys2;
use App\Models\Phys3;
use App\Models\Phys4;
use App\Models\RawData;
use App\Models\TestParameter;
use Illuminate\Http\Request;

class CreateRawDataFileController extends Controller
{
    public function create($analysis_id)
    {
        $requests = LabAcceptance::find($analysis_id);
        $rawDataFile = AnalysisRequest::find($requests->analysis_id);
        $rawDataFileValue = RawData::find($requests->analysis_id);

        $micro1 = Micro1::where('analysis_id',$analysis_id)->get();
        $micro2 = Micro2::where('analysis_id',$analysis_id)->get();
        $micro3 = Micro3::where('analysis_id',$analysis_id)->get();
        $micro4 = Micro4::where('analysis_id',$analysis_id)->get();

        $chem1 = Chem1::where('analysis_id',$analysis_id)->get();
        $chem2 = Chem2::where('analysis_id',$analysis_id)->get();
        $chem3 = Chem3::where('analysis_id',$analysis_id)->get();
        $chem4 = Chem4::where('analysis_id',$analysis_id)->get();
        $chem5 = Chem5::where('analysis_id',$analysis_id)->get();
        $chem6 = Chem6::where('analysis_id',$analysis_id)->get();
        $chem7 = Chem7::where('analysis_id',$analysis_id)->get();
        $chem9 = Chem9::where('analysis_id',$analysis_id)->get();
        $chem10 = Chem10::where('analysis_id',$analysis_id)->get();

        $phys1 = Phys1::where('analysis_id',$analysis_id)->get();
        $phys2 = Phys2::where('analysis_id',$analysis_id)->get();
        $phys3 = Phys3::where('analysis_id',$analysis_id)->get();
        $phys4 = Phys4::where('analysis_id',$analysis_id)->get();

        $test_parameters = TestParameter::query()
            ->where('analysis_id', $analysis_id)
            ->get();

        $library_test_parameters = LibraryTestParameter::all();

        return view('laboratory.lab_work_order.create', compact(
            'requests',
            'rawDataFile',
            'rawDataFileValue',
            'test_parameters',
            'library_test_parameters',
            'micro1',
            'micro2',
            'micro3',
            'micro4',
            'chem1',
            'chem2',
            'chem3',
            'chem4',
            'chem5',
            'chem6',
            'chem7',
            'chem9',
            'chem10',
            'phys1',
            'phys2',
            'phys3',
            'phys4',
        ));
    }
}
