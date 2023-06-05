@extends('layouts.app')
@section('title', 'Add Analysis Request')
@section('content')

    <div class="card mb-3 bg-white">
        <form class="mb-3">
            <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900">Search</label>
            <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg aria-hidden="true" class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Search Account name, Account ID..." name="search" value="{{ old('search') }}" autofocus
                    autocomplete="search">
                <button type="submit"
                    class="absolute right-2.5 bottom-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Search</button>
            </div>
        </form>
        <label for="">Client Lists</label>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Account name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Account number
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
                        <tr class="border-b bg-white">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                {{ $client->account_name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $client->account_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->municipality_or_city }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route ('service.add-analysis-request.form', ['account_number' => $client->account_number])  }}" class="font-medium text-blue-600 hover:underline">Add Analysis</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>



    {{-- <div class="flex justify-end">
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </div> --}}

@endsection
