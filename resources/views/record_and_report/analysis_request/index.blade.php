    @extends('layouts.app')
    @section('title', 'Analysis Request')
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
                                Analysis reqeust id
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Account Name
                            </th> --}}

                            <th scope="col" class="px-6 py-3">
                                Collected By
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
                        @foreach ($requests as $request)
                            <tr class="bg-white border-b">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $request->analysis_id_ }}
                                </td>
                                {{-- <td class="px-6 py-3">
                                    {{ $request->account_name }}
                                </td> --}}
                                <td class="px-6 py-3">
                                    {{ $request->collector_name }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ \Carbon\Carbon::parse($request->date_collected)->format('m/d/Y') }}

                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('record-and-report.analysis-request.details', ['analysis_id' => $request->analysis_id]) }}"
                                        class="font-medium text-blue-600 hover:underline">View all details</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="my-5">
                {{ $requests->links() }}
            </div>
        </div>

    @endsection
