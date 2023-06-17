<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class QuerySearchController extends Controller
{
    public function client(Request $request)
    {
        $query = $request->input('search');

        $clients = Client::where('account_name', 'LIKE', "%$query%")
        ->orWhere('account_number', 'LIKE', "%$query%")
        ->orWhere('email', 'LIKE', "%$query%")
        ->orWhere('municipality_or_city', 'LIKE', "%$query%")
        ->orderByDesc('created_at')
        ->get();

        return view('service.analysis_request.create', compact('clients'));
    }
}