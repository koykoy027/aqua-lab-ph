@extends('layouts.app')
@section('title', 'Lab Result Status')
@section('content')

    @if (session()->has('message'))
        <div id="alert-3" class="mb-4 flex rounded-lg bg-green-50 p-4 text-green-800" role="alert">
            <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Success! {{ session('message') }}
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 rounded-lg bg-green-50 p-1.5 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    <div class="card mb-3 bg-white">
        <label>Lab result status table</label>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Analysis Request ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Account Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Remarks
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Collected By
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Time
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Source of Water Sample
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Water Purpose
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Test Parameters
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Approve</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="border-b bg-white">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $data->analysis_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->account_name }}
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="mr-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">Pending</span>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->collector_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->date_collected }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->time_collected }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($data->source_of_water_sample == 'Others')
                                    {{ $data->source_of_water_sample_others }}
                                @else
                                    {{ $data->source_of_water_sample }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($data->water_purpose == 'Others')
                                    {{ $data->water_purpose_others }}
                                @else
                                    {{ $data->water_purpose }}
                                @endif

                            </td>
                            <td class="px-6 py-4">
                                {{ $data->test_parameters }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('laboratory.lab-acceptance.create', ['analysis_id' => $data->analysis_id]) }}" class="font-medium text-blue-600 hover:underline">Lab Acceptance</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
