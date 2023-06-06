<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
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
}