@extends('layouts.app')
@section('title', 'Analysis Request Table')
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
                            Account name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Client Account ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            E-mail Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Municipality or City
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $client->account_name }}
                            </th>
                            <td class="px-6 py-4">
                                49SRL0623WSP{{ $client->account_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->municipality_or_city }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('service.add-analysis-request.form', ['account_number' => $client->account_number]) }}"
                                    class="font-medium text-blue-600 hover:underline">Add Analysis</a>
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
