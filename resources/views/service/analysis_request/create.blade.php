@extends('layouts.app')
@section('title', 'Add Analysis Request')
@section('content')

    <div class="card mb-3 bg-white">
        @include('components.search')

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
