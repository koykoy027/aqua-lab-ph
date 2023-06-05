@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="mb-3 grid sm:grid-cols-1 sm:gap-2 lg:grid-cols-4 lg:gap-4">
        <div class="card bg-white">
            <h1 class="bold text-2xl">{{ $totalClient }}</h1>
            <p class="text-slate-500">Total Clients</p>
        </div>
        <div class="card bg-white">
            <h1 class="bold text-2xl">4</h1>
            <p class="text-slate-500">Total Lab accepted</p>
        </div>
        <div class="card bg-white">
            <h1 class="bold text-2xl">5</h1>
            <p class="text-slate-500">Total Lab rejected</p>
        </div>
        <div class="card bg-white">
            <h1 class="bold text-2xl">2</h1>
            <p class="text-slate-500">Total released result</p>
        </div>
    </div>


    <div class="grid gap-2 sm:grid-cols-1 lg:grid-cols-2">
        <div class="card bg-white">
            <h1 class="bold mb-3 text-2xl">Recent clients</h1>
            <hr>

            <div class="relative mt-3 overflow-x-auto sm:rounded-lg">
                <table class="w-full text-left text-sm text-gray-500">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Account name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type of ownership
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentClients as $recentClient)
                            <tr class="border-b bg-white">
                                <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                    {{ $recentClient->account_name }}
                                </th>
                                <td class="px-6 py-4">
                                    @if ($recentClient->type_of_ownership === 'Single Prorietorship')
                                        <span
                                            class="mr-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                            {{ $recentClient->type_of_ownership }}
                                        </span>
                                    @endif

                                    @if ($recentClient->type_of_ownership === 'Partnership')
                                        <span
                                            class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                            {{ $recentClient->type_of_ownership }}
                                        </span>
                                    @endif
                                    @if ($recentClient->type_of_ownership === 'Cooperative')
                                        <span
                                            class="mr-2 rounded bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800">
                                            {{ $recentClient->type_of_ownership }}
                                        </span>
                                    @endif
                                    @if ($recentClient->type_of_ownership === 'Corporation')
                                        <span
                                            class="mr-2 rounded bg-slate-100 px-2.5 py-0.5 text-xs font-medium text-slate-800">
                                            {{ $recentClient->type_of_ownership }}
                                        </span>
                                    @endif



                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>


@endsection
