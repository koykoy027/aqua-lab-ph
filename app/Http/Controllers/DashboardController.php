<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use Illuminate\Http\Request;

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

        return view('dashboard.index', compact('recentClients', 'totalClient', 'totalLabAccepted', 'totalLabRejected', 'totalReleaseStatus', 'totalPending', 'totalConditionallyAccepted', 'totalDisapprove'));
    }
}
