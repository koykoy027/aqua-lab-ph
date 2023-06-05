<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderByDesc('created_at')
        ->paginate(10);

        return view ('record_and_report.client_list.index', compact('clients'));
    }
    public function create(){
        return view('service.client_account.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            // 'account_number' => 'required',
            'account_name' => 'required',
            'business_tin' => 'required',
            'name_of_owner' => 'required',
            'type_of_ownership' => 'required',
            'name_of_authorized_person' => 'required',
            'unit_no_floor_bldg_name' => 'required',
            'street_name_or_subdivision' => 'required',
            'barangay_name' => 'required',
            'municipality_or_city' => 'required',
            'zip_code' => 'required',
            'province' => 'required',
            'telephone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'fsr_assigned' => 'required',
            'no_of_microbiology_samples' => 'required',
            'sample_collection_frequency_micro' => 'required',
            'no_of_physico_chemical_samples' => 'required',
            'sample_collection_frequency_pchem' => 'required',
            'assigned_week' => 'required',
            'type' => 'required',
            ]);

            Client::create($request->all());
            return redirect()->back()->with(['message' => 'Client account has been created successfully!']);
    }

    public function profile($account_number){
        $clients = Client::find($account_number);

        return view('record_and_report.client_list.profile', compact('clients'));

    }
}