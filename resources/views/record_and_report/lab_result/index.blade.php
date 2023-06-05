@extends('layouts.app')
@section('title', 'Lab Result')
@section('content')

 @if (session()->has('message'))
    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            Success! {{ session('message') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
@endif

<div class="card bg-white mb-3">
    <label>Lab Result Table</label>

    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Account name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Account Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Unit No Floor Bldg Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stree Name Or Subdivision
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Barangay Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Municipality Or City
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Zip Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Province
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact Person
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mobile
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Collected By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Collected
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Collected
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Microbial Testing
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Change Of Filter
                    </th>
                    <th scope="col" class="px-6 py-3">
                        last Change Of Uv
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Collection Point
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address Of Collection Point
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Uv Light
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Chlorinator
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Faucet Condition After disinfection
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Source Of Water Sample
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Water Purpose
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Test Request
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Customer Representative Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sample ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Account ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Establishment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estab Same As Sampling Loc
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sampling Location Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Owner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Add Same As Sampling Add
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sampling Location Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cinty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sampling Point
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Source
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Purpose
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Sampled
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Sampled
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sampled BY
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Receive
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Receive
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Walk-In
                    </th>
                    <th scope="col" class="px-6 py-3">
                        REMARKS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Holding Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Remarks
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Tested
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HPC-A
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HPC-B
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HPC-AVE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HPC-VALUE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        % Difference
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TC-24H
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TC-48H
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BG-24H
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BG-48H
                    </th>
                    <th scope="col" class="px-6 py-3">
                        FC-24H
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Analyzed BY
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HPC
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HPC-REMARKS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Coliform
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TC-REMARKS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecal Coliform
                    </th>
                    <th scope="col" class="px-6 py-3">
                        FC-REMARKS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Remarks
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Checked BY
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cert NO.
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Raymond Foster
                    </th>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>


                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
