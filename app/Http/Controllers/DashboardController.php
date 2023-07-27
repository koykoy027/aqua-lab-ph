<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function getAllData()
    {
        $recentClients = Client::orderByDesc('created_at')
            ->limit(8)
            ->get();

        $totalClient = Client::count();
        $totalLabAccepted = AnalysisRequest::where('remarks', 'Accepted')->count();
        $totalLabRejected = AnalysisRequest::where('remarks', 'Rejected')->count();
        $totalReleaseStatus = AnalysisRequest::where('remarks', 'Approve')->count();
        $totalPending = AnalysisRequest::where('remarks', 'Pending')->count();
        $totalConditionallyAccepted = AnalysisRequest::where('remarks', 'Conditionally Accepted')->count();
        $totalDisapprove = AnalysisRequest::where('remarks', 'Disapprove')->count();


        // market segment
        $total0001 = Client::where('market_segment', '0001 - Water Refilling Station')->count();
        $total002A = Client::where('market_segment', '002A - Food and Beverages (Service)')->count();
        $total002B = Client::where('market_segment', '002B - Food and Beverages (Manufacturer)')->count();
        $total003 = Client::where('market_segment', '003 - Hospitalit Industry')->count();
        $total004A = Client::where('market_segment', '004A - Healthcare (Dialysis)')->count();
        $total004B = Client::where('market_segment', '004B - Healthcare (Lying-in)')->count();
        $total004C = Client::where('market_segment', '004C - Healthcare (Hospital)')->count();
        $total005 = Client::where('market_segment', '005 - Water Service Provider')->count();
        $totalOthers = Client::where('market_segment', 'Others')->count();

        // per region

        $samplesPerCityMunicipality = Client::select('municipality_or_city', DB::raw('COUNT(analysis_requests.analysis_id) as total_analysis_requests'))
        ->leftJoin('analysis_requests', 'clients.account_number', '=', 'analysis_requests.account_number')
        ->groupBy('municipality_or_city')
        ->get();

        $microSamplesPerCityMunicipality = Client::select('municipality_or_city', DB::raw('COUNT(analysis_requests.analysis_id) as total_analysis_requests'))
        ->leftJoin('analysis_requests', 'clients.account_number', '=', 'analysis_requests.account_number')
        ->where('test_parameters', '=', 'MICR1 - Heterotrophic Plate Count (HPC)')
        ->orWhere('test_parameters', '=', 'MICR2 - Thermotolerant Colifom Test')
        ->orWhere('test_parameters', '=', 'MICR3 - Total Coliform')
        ->orWhere('test_parameters', '=', 'MICR4 - E. coli Test')
        ->orWhere('test_parameters', '=', 'MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)')
        ->groupBy('municipality_or_city')
        ->get();

        return view('dashboard.index', compact(
            'recentClients',
        'totalClient',
        'totalLabAccepted',
        'totalLabRejected',
        'totalReleaseStatus',
        'totalPending',
        'totalConditionallyAccepted',
        'totalDisapprove',
        'total0001',
        'total002A',
        'total002B',
        'total003',
        'total004A',
        'total004B',
        'total004C',
        'total005',
        'totalOthers',
        'samplesPerCityMunicipality',
        'microSamplesPerCityMunicipality',
                ));
    }
}
