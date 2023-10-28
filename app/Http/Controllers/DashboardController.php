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

        $totalRequest = AnalysisRequest::count();
        $totalMicroRequest = AnalysisRequest::where('test_parameters', 'micro')->count();
        $totalPyChemRequest = AnalysisRequest::whereNot('test_parameters', 'micro')->count();

        if ($totalRequest) {
            $percentageMicroRequest = ($totalMicroRequest / $totalRequest) * 100;
            $percentagePyChemRequest = ($totalPyChemRequest / $totalRequest) * 100;
        } else {
            $percentageMicroRequest = null;
            $percentagePyChemRequest = null;
        }




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

        // market segment micro

        $total0001Micro = Client::where('market_segment', '0001 - Water Refilling Station')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total002AMicro = Client::where('market_segment', '002A - Food and Beverages (Service)')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total002BMicro = Client::where('market_segment', '002B - Food and Beverages (Manufacturer)')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total003Micro = Client::where('market_segment', '003 - Hospitality Industry')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total004AMicro = Client::where('market_segment', '004A - Healthcare (Dialysis)')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total004BMicro = Client::where('market_segment', '004B - Healthcare (Lying-in)')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total004CMicro = Client::where('market_segment', '004C - Healthcare (Hospital)')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total005Micro = Client::where('market_segment', '005 - Water Service Provider')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total006Micro = Client::where('market_segment', '006 - Residential')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total007Micro = Client::where('market_segment', '007 - Academe')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $total008Micro = Client::where('market_segment', '008 - Industries')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();
        $totalOthersMicro = Client::where('market_segment', 'Others')
            ->whereRelation('analysisRequest', 'test_parameters', 'micro')->count();

        // pht

        $total0001Pychem = Client::where('market_segment', '0001 - Water Refilling Station')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total002APychem = Client::where('market_segment', '002A - Food and Beverages (Service)')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total002BPychem = Client::where('market_segment', '002B - Food and Beverages (Manufacturer)')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total003Pychem = Client::where('market_segment', '003 - Hospitality Industry')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total004APychem = Client::where('market_segment', '004A - Healthcare (Dialysis)')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total004BPychem = Client::where('market_segment', '004B - Healthcare (Lying-in)')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total004CPychem = Client::where('market_segment', '004C - Healthcare (Hospital)')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total005Pychem = Client::where('market_segment', '005 - Water Service Provider')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total006Pychem = Client::where('market_segment', '006 - Residential')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total007Pychem = Client::where('market_segment', '007 - Academe')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $total008Pychem = Client::where('market_segment', '008 - Industries')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();
        $totalOthersPychem = Client::where('market_segment', 'Others')
            ->whereRelation('analysisRequest', 'test_parameters', 'pychem')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'phys')
            ->orWhereRelation('analysisRequest', 'test_parameters', 'chem')
            ->count();


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
            'total0001Micro',
            'total002AMicro',
            'total002BMicro',
            'total003Micro',
            'total004AMicro',
            'total004BMicro',
            'total004CMicro',
            'total005Micro',
            'total006Micro',
            'total007Micro',
            'total008Micro',
            'totalOthersMicro',
            'total0001Pychem',
            'total002APychem',
            'total002BPychem',
            'total003Pychem',
            'total004APychem',
            'total004BPychem',
            'total004CPychem',
            'total005Pychem',
            'total006Pychem',
            'total007Pychem',
            'total008Pychem',
            'totalOthersPychem',
            'totalRequest',
            'totalMicroRequest',
            'totalPyChemRequest',
            'percentageMicroRequest',
            'percentagePyChemRequest',


        ));
    }
}
