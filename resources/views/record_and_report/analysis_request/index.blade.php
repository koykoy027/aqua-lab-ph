    @extends('layouts.app')
    @section('title', 'Analysis Request')
    @section('content')


        <div class="card mb-3 bg-white">
            <label>Analysis Request Table</label>

            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-left text-sm text-gray-500">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700">
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
                            <tr class="border-b bg-white">
                                <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                    {{ $request->analysis_id }}
                                </td>
                                {{-- <td class="px-6 py-3">
                                    {{ $request->account_name }}
                                </td> --}}
                                <td class="px-6 py-3">
                                    {{ $request->collector_name }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ $request->date_collected }}
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
        </div>

    @endsection
