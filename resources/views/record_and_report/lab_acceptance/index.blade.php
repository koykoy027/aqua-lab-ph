@extends('layouts.app')
@section('title', 'Lab acceptance')
@section('content')

    <div class="mb-3 justify-end lg:flex">
        <div class="bg-white card">
            @include('components.datefilter')
        </div>
    </div>

    <div class="mb-3 bg-white card">
        <div class="flex justify-between items-center gap-2">
            <div class="ml-1 text-sm font-medium text-gray-500 md:ml-2s">
                <h1 class="uppercase">@yield('title')</h1>
                <p class="text-xs">List of all Samples</p>
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
                            Evaluated by
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Time
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Sample Condition
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Remarks
                        </th>
                        <th scope="col" class="sr-only">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acceptances as $acceptance)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $acceptance->sample_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $acceptance->evaluated_by }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($acceptance->date_evaluated)->format('m/d/Y') }}
                            </td>
                            <td class="px-6 py-4">

                                {{ \Carbon\Carbon::parse($acceptance->time_evaluated)->format('g:i A') }}

                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $acceptance->sample_condition }}
                            </td> --}}
                            <td class="px-6 py-4">
                                <span
                                    class="mr-2 rounded  px-2.5 py-0.5 text-xs font-medium
                                    @if ($acceptance->remarks === 'Pending') text-orange-800 bg-orange-100 @endif
                                    @if ($acceptance->remarks === 'Conditionally Accepted') text-violet-800 bg-violet-100 @endif
                                    @if ($acceptance->remarks === 'Accepted') text-green-800 bg-green-100 @endif
                                    @if ($acceptance->remarks === 'Rejected') text-red-800 bg-red-100 @endif
                                    @if ($acceptance->remarks === 'Approve') text-blue-800 bg-blue-100 @endif
                                    @if ($acceptance->remarks === 'Disapprove') text-yellow-800 bg-yellow-100 @endif
                                    @if ($acceptance->remarks === 'Testing on-going') text-slate-800 bg-slate-100 @endif
                                    @if ($acceptance->remarks === 'For approval') text-pink-800 bg-pink-100 @endif
                                    @if ($acceptance->remarks === 'For releasing') text-cyan-800 bg-cyan-100 @endif

                                ">
                                    {{ $acceptance->remarks }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('record-and-report.lab-acceptance.details', ['analysis_id' => $acceptance->analysis_id]) }}"
                                    class="font-medium text-blue-600 hover:underline">View all details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $acceptances->links() }}
        </div>
    </div>

@endsection
