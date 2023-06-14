@extends('layouts.app')
@section('title', 'Lab Approval')
@section('content')

    <div class="card mb-3 bg-white">
        <label>Lab Approval Table</label>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Analysis ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Test Parameters
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr class="border-b bg-white">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $request->analysis_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $request->test_parameters }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                {{-- <a href="{{ route('laboratory.lab_approval.details', ['analysis_id' => $request->analysis_id]) }}" class="font-medium text-blue-600 hover:underline">View</a> --}}
                                <a href="{{ route('laboratory.lab_approval.details', ['analysis_id' => $request->analysis_id]) }}"
                                    class="font-medium text-blue-600 hover:underline">View Details</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
