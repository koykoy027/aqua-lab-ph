@extends('layouts.app')
@section('title', 'Lab Result')
@section('content')

    <div class="card mb-3 bg-white">
        <label>Lab Result Table</label>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
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
                    <tr class="border-b bg-white">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
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
