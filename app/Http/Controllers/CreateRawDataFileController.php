<?php

namespace App\Http\Controllers;

use App\Models\LabAcceptance;
use Illuminate\Http\Request;

class CreateRawDataFileController extends Controller
{
    public function create($sample_id){
        $requests = LabAcceptance::find($sample_id);
        return view('laboratory.lab_work_order.create', compact('requests'));
    }
}