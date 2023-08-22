@extends('layouts.app')
@section('title', 'Client Lists')
@section('content')



    <div class="mb-3 bg-white card">
    <div class="justify-end lg:flex">
        @include('components.search')
    </div>
        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Account Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Municipality Or City
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $client->account_name }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $client->email }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $client->municipality_or_city }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('record-and-report.record_and_report.client_list.profile', ['account_number' => $client->account_number]) }}"
                                    class="font-medium text-blue-600 hover:underline">View Profile</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $clients->links() }}
        </div>
    </div>

@endsection
