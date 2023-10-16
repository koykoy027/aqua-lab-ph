@extends('layouts.app')
@section('title', 'Lab Work Order')
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
                            Sample ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Collector name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Collected
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Test Parameters
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Remarks
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($analysisRequest as $analysisRequests)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $analysisRequests->analysis_id_ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $analysisRequests->collector_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($analysisRequests->date_collected)->format('m/d/Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $analysisRequests->test_parameters }}
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="mr-2 rounded  px-2.5 py-0.5 text-xs font-medium
                                    @if ($analysisRequests->remarks === 'Pending') text-orange-800 bg-orange-100 @endif
                                    @if ($analysisRequests->remarks === 'Conditionally Accepted') text-violet-800 bg-violet-100 @endif
                                    @if ($analysisRequests->remarks === 'Accepted') text-green-800 bg-green-100 @endif
                                    @if ($analysisRequests->remarks === 'Rejected') text-red-800 bg-red-100 @endif
                                    @if ($analysisRequests->remarks === 'Approve') text-blue-800 bg-blue-100 @endif
                                    @if ($analysisRequests->remarks === 'Disapprove') text-yellow-800 bg-yellow-100 @endif
                                    @if ($analysisRequests->remarks === 'Testing on-going') text-slate-800 bg-slate-100 @endif
                                    @if ($analysisRequests->remarks === 'For approval') text-pink-800 bg-pink-100 @endif
                                    @if ($analysisRequests->remarks === 'For releasing') text-cyan-800 bg-cyan-100 @endif
                                ">
                                    {{ $analysisRequests->remarks }}
                                </span>

                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('laboratory.lab-work-order-form.create', ['analysis_id' => $analysisRequests->analysis_id]) }}"
                                    class="font-medium text-blue-600 hover:underline">Create Raw Data File</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $analysisRequest->links() }}
        </div>
    </div>

@endsection
