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
            ->limit(5)
            ->get();

        $totalClient = Client::count();
        $totalLabAccepted = AnalysisRequest::where('remarks', 'Accepted')->count();
        $totalLabRejected = AnalysisRequest::where('remarks', 'Rejected')->count();
        $totalReleaseStatus = AnalysisRequest::count();

        return view('dashboard.index', compact('recentClients', 'totalClient', 'totalLabAccepted', 'totalLabRejected', 'totalReleaseStatus'));
    }
}
