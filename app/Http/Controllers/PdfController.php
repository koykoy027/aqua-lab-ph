<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generateAnalysisPdf($analysis_id)
    {
        $micro_details = RawData::where('analysis_id', $analysis_id)->get();

        $clients = Client::find($analysis_id);
        $details = AnalysisRequest::find($analysis_id);
        $labAcceptance = LabAcceptance::find($analysis_id);

        $collection_details = AnalysisRequest::where('analysis_id', $analysis_id)->get();

        $pdf = Pdf::loadView('record_and_report.lab_result.pdf',
        [
            'details' => $details,
            'micro_details' => $micro_details,
            'collection_details' => $collection_details,
            'clients' => $clients,
            'labAcceptance' => $labAcceptance])
            ->setPaper([0, 0, 612, 1008], 'portrait');
            return $pdf->stream('analysis-request.pdf');
        }
}
