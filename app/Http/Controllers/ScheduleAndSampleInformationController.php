<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\AnalysisRequest;

class ScheduleAndSampleInformationController extends Controller
{

    public function index(Request $request){
        $query = $request->input('search');

        $clients = Client::where('account_number', 'LIKE', "%$query%")
        ->orWhere('account_name', 'LIKE', "%$query%")
        ->orWhere('email', 'LIKE', "%$query%")
        ->orWhere('municipality_or_city', 'LIKE', "%$query%")
        ->orderByDesc('updated_at')
        ->paginate(10);

        return view('service.schedule_and_sample_information.client_table', compact('clients', 'query'));
    }


    public function show($account_number){
        $clients = Client::find($account_number);
        $analysisRequest = AnalysisRequest::query()
        ->where('account_number', $account_number)

        ->paginate(10);

        return view('service.schedule_and_sample_information.profile_table', compact(
            'analysisRequest',
            'clients',
        ));
    }
}