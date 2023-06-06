@extends('layouts.app')
@section('title', 'Lab Work Order')
@section('content')

 @if (session()->has('message'))
    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            Success! {{ session('message') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
@endif

<div class="card bg-white mb-3">
    <label>Lab Work Order Table</label>

    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Sample ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Evaluated By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Evaluated
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time Evaluated
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sample Condition
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
                @foreach ($acceptances as $acceptance)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $acceptance -> sample_id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $acceptance -> evaluated_by }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $acceptance -> date_evaluated }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $acceptance -> time_evaluated }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $acceptance -> sample_condition }}
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                            {{ $acceptance -> remarks }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('laboratory.lab-work-order-form.create', ['sample_id' => $acceptance -> sample_id]) }}" class="font-medium text-blue-600 hover:underline">Create Raw Data File</a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
