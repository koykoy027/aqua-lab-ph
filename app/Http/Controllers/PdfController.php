<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PdfController extends Controller
{
    public function generateAnalysisPdf($analysis_id)
    {
        $currentDateTime = Carbon::now();
        $analysisRequests = AnalysisRequest::find($analysis_id);
        $rawDatas = RawData::where('analysis_id', $analysis_id)->get();
        $account_number = $analysisRequests->account_number;
        $clients = Client::find($account_number);
        $labAcceptance = LabAcceptance::find($analysis_id);
        $collection_details = AnalysisRequest::where('analysis_id', $analysis_id)->get();

        // certificate no. format
        $currentYear = $currentDateTime->format('y'); // get year
        $formattedID = $analysisRequests->formatted_id; // format id 00001



        if ($analysisRequests->test_parameters === 'MICR1 - Heterotrophic Plate Count (HPC)' OR
        $analysisRequests->test_parameters === 'MICR2 - Thermotolerant Colifom Test' OR
        $analysisRequests->test_parameters === 'MICR3 - Total Coliform' OR
        $analysisRequests->test_parameters === 'MICR4 - E. coli Test' OR
        $analysisRequests->test_parameters === 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)') {
            $MLorCL = "ML";
        } else {
            $MLorCL = "CL";
        }


        $certificateNo = $currentYear . $formattedID . $MLorCL; // result



        $pdf = Pdf::loadView('record_and_report.lab_result.pdf',
        [
            'analysisRequests' => $analysisRequests,
            'rawDatas' => $rawDatas,
            'collection_details' => $collection_details,
            'clients' => $clients,
            'labAcceptance' => $labAcceptance,
            'certificateNo' => $certificateNo,

            ])
            // ->setPaper([0, 0, 612, 1008], 'portrait');
            ->setPaper([0, 0, 594.72, 841.68], 'portrait');
            return $pdf->stream($currentDateTime->format('Y-m-d-') . $clients->account_name.'.pdf');
        }
}
