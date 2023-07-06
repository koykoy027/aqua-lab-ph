@extends('layouts.app')
@section('title', 'Lab Work Order')
@section('content')

    <div class="card mb-3 bg-white">
        <label>Lab Work Order Table</label>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
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
                        <tr class="border-b bg-white">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $analysisRequests->analysis_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $analysisRequests->collector_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $analysisRequests->date_collected }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $analysisRequests->test_parameters }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="mr-2 rounded  px-2.5 py-0.5 text-xs font-medium
                                    @if($analysisRequests->remarks === 'Pending') text-orange-800 bg-orange-100 @endif
                                    @if($analysisRequests->remarks === 'Conditionally Accepted') text-violet-800 bg-violet-100 @endif
                                    @if($analysisRequests->remarks === 'Accepted') text-green-800 bg-green-100 @endif
                                    @if($analysisRequests->remarks === 'Rejected') text-red-800 bg-red-100 @endif
                                    @if($analysisRequests->remarks === 'Approve') text-blue-800 bg-blue-100 @endif
                                    @if($analysisRequests->remarks === 'Disapprove') text-yellow-800 bg-yellow-100 @endif
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
    </div>

@endsection
