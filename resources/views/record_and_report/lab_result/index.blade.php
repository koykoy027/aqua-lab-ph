@extends('layouts.app')
@section('title', 'Lab Result')
@section('content')

    <div class="mb-3 bg-white card">
        <div class="flex justify-between gap-2">
            <div class="justify-start lg:flex">
                @include('components.datefilter')
            </div>
            <div class="justify-end lg:flex">
                @include('components.search')
            </div>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sample ID
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
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->analysis_id_ }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->collector_name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ \Carbon\Carbon::parse($data->date_collected)->format('m/d/Y') }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('record-and-report.lab-result.details', ['analysis_id' => $data->analysis_id]) }}"
                                    class="font-medium text-blue-600 hover:underline">View Details</a>
                            </td>
                        </tr>
                    @endforeach`

                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $datas->links() }}
        </div>
    </div>

@endsection
