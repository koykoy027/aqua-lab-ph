<?php

namespace App\Http\Controllers;

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

        return view('dashboard.index')
            ->with('recentClients', $recentClients)
            ->with('totalClient', $totalClient);
    }
}