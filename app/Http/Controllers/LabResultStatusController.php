<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class LabResultStatusController extends Controller
{
    public function index(){
        $datas = AnalysisRequest::orderByDesc('created_at')
        ->orWhere('remarks', 'Pending')
        ->orWhere('remarks', 'Rejected')
        ->paginate(10);
        return view ('service.lab_result_status.index', compact('datas'));
    }

    public function table(){
        $datas = AnalysisRequest::orderByDesc('updated_at')
        ->paginate(10);
        return view('record_and_report.lab_result.index', compact('datas'));
    }


    public function details($analysis_id){

        $analysis = AnalysisRequest::find($analysis_id);

        $clients = Client::find($analysis->account_number);

        return view('record_and_report.lab_result.details', compact('analysis', 'clients'));
    }



}