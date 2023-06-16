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
                            Account Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Municipality Or City
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr class="border-b bg-white">
                            <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $client->account_name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $client->email }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $client->municipality_or_city }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('record-and-report.lab-result.details', ['account_number' => $client->account_number]) }}"
                                    class="font-medium text-blue-600 hover:underline">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
