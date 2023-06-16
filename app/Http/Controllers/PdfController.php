<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Micro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function generateAnalysisPdf($analysis_id){
        
        $micro_details = Micro::where('analysis_id',$analysis_id)->get();
        
        $details = AnalysisRequest::where('analysis_id',$analysis_id)->get();

        $pdf = Pdf::loadView('record_and_report.analysis_request.pdf', ['details' =>  $details, 'micro_details' =>  $micro_details]);
        return $pdf->stream('analysis-request-details.pdf');
        
    }
    
}
