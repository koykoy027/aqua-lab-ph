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


        // trying this data
        // $totalMicro = AnalysisRequest::where('test_parameters', 'micro')->count();


        // market segment
        $total0001 = Client::where('market_segment', '0001 - Water Refilling Station')->count();
        $total002A = Client::where('market_segment', '002A - Food and Beverages (Service)')->count();
        $total002B = Client::where('market_segment', '002B - Food and Beverages (Manufacturer)')->count();
        $total003 = Client::where('market_segment', '003 - Hospitality Industry')->count();
        $total004A = Client::where('market_segment', '004A - Healthcare (Dialysis)')->count();
        $total004B = Client::where('market_segment', '004B - Healthcare (Lying-in)')->count();
        $total004C = Client::where('market_segment', '004C - Healthcare (Hospital)')->count();
        $total005 = Client::where('market_segment', '005 - Water Service Provider')->count();
        $total006 = Client::where('market_segment', '006 - Residential')->count();
        $total007 = Client::where('market_segment', '007 - Academe')->count();
        $total008 = Client::where('market_segment', '008 - Industries')->count();
        $totalOthers = Client::where('market_segment', 'Others')->count();

        // per region
        $samplesPerCityMunicipality = Client::select('municipality_or_city', DB::raw('COUNT(analysis_requests.analysis_id) as total_analysis_requests'))
            ->leftJoin('analysis_requests', 'clients.account_number', '=', 'analysis_requests.account_number')
            ->groupBy('municipality_or_city')
            ->get();

        $microSamplesPerCityMunicipality = Client::select('municipality_or_city', DB::raw('COUNT(analysis_requests.analysis_id) as total_analysis_requests'))
            ->leftJoin('analysis_requests', 'clients.account_number', '=', 'analysis_requests.account_number')
            ->where('test_parameters', '=', 'micro')
            ->groupBy('municipality_or_city')
            ->get();

        $phyChemSamplesPerCityMunicipality = Client::select('municipality_or_city', DB::raw('COUNT(analysis_requests.analysis_id) as total_analysis_requests'))
            ->leftJoin('analysis_requests', 'clients.account_number', '=', 'analysis_requests.account_number')
            ->where('test_parameters', '=', 'pychem')
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
            'total006',
            'total007',
            'total008',
            'totalOthers',
            'samplesPerCityMunicipality',
            'microSamplesPerCityMunicipality',
            'phyChemSamplesPerCityMunicipality',
        ));
    }
}
