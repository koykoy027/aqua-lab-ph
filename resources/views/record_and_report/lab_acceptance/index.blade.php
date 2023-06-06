@extends('layouts.app')
@section('title', 'Lab Acceptance')
@section('content')

    <div class="card mb-3 bg-white">
        <label>Lab Acceptance Table</label>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
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
                        <th scope="col" class="px-6 py-3">
                            Sample Condition
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Remarks
                        </th>

                        {{-- <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acceptances as $acceptance)
                        <tr class="border-b bg-white">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $acceptance->analysis_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $acceptance->evaluated_by }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acceptance->date_evaluated }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acceptance->time_evaluated }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $acceptance->sample_condition }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($acceptance->remarks === 'Conditionally Accepted')
                                    <span class="mr-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                        {{ $acceptance->remarks }}
                                    </span>
                                @endif

                                @if ($acceptance->remarks === 'Accepted')
                                    <span
                                        class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                        {{ $acceptance->remarks }}
                                    </span>
                                @endif
                                @if ($acceptance->remarks === 'Rejected')
                                    <span
                                        class="mr-2 rounded bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800">
                                        {{ $acceptance->remarks }}
                                    </span>
                                @endif
                            </td>
                            {{-- <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Action</a>
                            </td> --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
