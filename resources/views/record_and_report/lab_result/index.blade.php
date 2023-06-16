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
                            Analysis Request ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Collector name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Collected
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="border-b bg-white">
                            <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $data->analysis_id }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->collector_name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->date_collected }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('record-and-report.lab-result.details', ['analysis_id' => $data->analysis_id]) }}"
                                    class="font-medium text-blue-600 hover:underline">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
