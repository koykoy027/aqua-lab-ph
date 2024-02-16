@extends('layouts.app')
@section('title', 'Facility')
@section('content')

    <div class="card mb-3 bg-white">
        <div class="flex justify-between items-center gap-2">
            <div class="ml-1 text-sm font-medium text-gray-500 md:ml-2s">
                <h1 class="uppercase">@yield('title')</h1>
                <p class="text-xs">List of all Facility</p>
            </div>

            <div class="justify-end lg:flex">
                @include('components.search')
            </div>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Purpose
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-white">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                            -
                        </th>
                        <td class="px-6 py-3">
                            -
                        </td>
                        <td class="px-6 py-3">
                            -
                        </td>
                        {{-- <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
