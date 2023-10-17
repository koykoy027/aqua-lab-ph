@extends('layouts.app')
@section('title', 'Lab Acceptance table')
@section('content')

<div class="mb-3 bg-white card">
    <div class="flex justify-end gap-2">
        <div class="justify-end lg:flex">
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
                        Analysis Request ID
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        Account Name
                    </th> --}}
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
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $data->analysis_id_ }}
                    </th>
                    {{-- <td class="px-6 py-4">
                        {{ $data->account_name }}
                    </td> --}}
                    <td class="px-6 py-4">

                        <span class="mr-2 rounded px-2.5 py-0.5 text-xs font-medium text-center
                                    @if ($data->remarks === 'Pending') text-orange-800 bg-orange-100 @endif
                                    @if ($data->remarks === 'Conditionally Accepted') text-violet-800 bg-violet-100 @endif
                                    @if ($data->remarks === 'Accepted') text-green-800 bg-green-100 @endif
                                    @if ($data->remarks === 'Rejected') text-red-800 bg-red-100 @endif
                                    @if ($data->remarks === 'Approve') text-blue-800 bg-blue-100 @endif
                                    @if ($data->remarks === 'Disapprove') text-yellow-800 bg-yellow-100 @endif
                                    @if ($data->remarks === 'Testing on-going') text-slate-800 bg-slate-100 @endif
                                    @if ($data->remarks === 'For approval') text-pink-800 bg-pink-100 @endif
                                    @if ($data->remarks === 'For releasing') text-cyan-800 bg-cyan-100 @endif

                                ">
                            {{ $data->remarks }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->collector_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($data->date_collected)->format('m/d/Y') }}

                    </td>
                    <td class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($data->time_collected)->format('g:i A') }}
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
                        <a href="{{ route('laboratory.lab-acceptance.create', ['analysis_id' => $data->analysis_id]) }}"
                            class="font-medium text-blue-600 hover:underline">Lab Acceptance Form</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="my-5">
        {{ $datas->links() }}
    </div>
</div>

@endsection