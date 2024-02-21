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
use App\Models\Client;
use App\Models\LabAcceptance;
use App\Models\LibraryTestParameter;
use App\Models\Micro1;
use App\Models\Micro2;
use App\Models\Micro3;
use App\Models\Micro3_9223B;
use App\Models\Micro4;
use App\Models\Micro4_9223B;
use App\Models\Micro6A;
use App\Models\Phys1;
use App\Models\Phys2;
use App\Models\Phys3;
use App\Models\Phys4;
use App\Models\TestParameter;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PdfController extends Controller
{
    public function generateAnalysisPdf($analysis_id)
    {
        $currentDateTime = Carbon::now();
        $analysisRequests = AnalysisRequest::find($analysis_id);
        $account_number = $analysisRequests->account_number;
        $clients = Client::find($account_number);
        $labAcceptance = LabAcceptance::find($analysis_id);
        $collection_details = AnalysisRequest::where('analysis_id', $analysis_id)->get();

        // certificate no. format
        $currentYear = $currentDateTime->format('y'); // get year
        $formattedID = $analysisRequests->formatted_id; // format id 00001

        $test_parameters = TestParameter::query()
            ->where('analysis_id', $analysis_id)
            ->get();

        $micro1 = Micro1::where('analysis_id', $analysis_id)->get();
        $micro2 = Micro2::where('analysis_id', $analysis_id)->get();
        $micro3 = Micro3::where('analysis_id', $analysis_id)->get();
        $micr3_9223B = Micro3_9223B::where('analysis_id', $analysis_id)->first();
        $micro4 = Micro4::where('analysis_id', $analysis_id)->get();
        $micr4_9223B = Micro4_9223B::where('analysis_id',$analysis_id)->first();
        $micro6a = Micro6A::where('analysis_id',$analysis_id)->first();
        $chem1 = Chem1::where('analysis_id', $analysis_id)->get();
        $chem2 = Chem2::where('analysis_id', $analysis_id)->get();
        $chem3 = Chem3::where('analysis_id', $analysis_id)->get();
        $chem4 = Chem4::where('analysis_id', $analysis_id)->get();
        $chem5 = Chem5::where('analysis_id', $analysis_id)->get();
        $chem6 = Chem6::where('analysis_id', $analysis_id)->get();
        $chem7 = Chem7::where('analysis_id', $analysis_id)->get();
        $chem9 = Chem9::where('analysis_id', $analysis_id)->get();
        $chem10 = Chem10::where('analysis_id', $analysis_id)->get();

        $phys1 = Phys1::where('analysis_id', $analysis_id)->get();
        $phys2 = Phys2::where('analysis_id', $analysis_id)->get();
        $phys3 = Phys3::where('analysis_id', $analysis_id)->get();
        $phys4 = Phys4::where('analysis_id', $analysis_id)->get();


        $library_test_parameters = LibraryTestParameter::all();



        if ($analysisRequests->test_parameters === 'micro') {
            $MLorCL = "ML";
        } else {
            $MLorCL = "CL";
        }


        $certificateNo = $currentYear . $formattedID . $MLorCL; // result



        $pdf = Pdf::loadView(
            'record_and_report.lab_result.pdf',
            [
                'analysisRequests' => $analysisRequests,
                'collection_details' => $collection_details,
                'clients' => $clients,
                'labAcceptance' => $labAcceptance,
                'certificateNo' => $certificateNo,
                'test_parameters' => $test_parameters,
                'library_test_parameters' => $library_test_parameters,
                'micro1' => $micro1,
                'micro2' => $micro2,
                'micro3' => $micro3,
                'micr3_9223B' => $micr3_9223B,
                'micro4' => $micro4,
                'micr4_9223B' => $micr4_9223B,
                'micro6a' => $micro6a,
                'chem1' => $chem1,
                'chem2' => $chem2,
                'chem3' => $chem3,
                'chem4' => $chem4,
                'chem5' => $chem5,
                'chem6' => $chem6,
                'chem7' => $chem7,
                'chem9' => $chem9,
                'chem10' => $chem10,
                'phys1' => $phys1,
                'phys2' => $phys2,
                'phys3' => $phys3,
                'phys4' => $phys4,

            ]
        )
            // ->setPaper([0, 0, 612, 1008], 'portrait');
            ->setPaper([0, 0, 594.72, 841.68], 'portrait');
        return $pdf->stream($currentDateTime->format('Y-m-d-') . $clients->account_name . '.pdf');
    }
}
