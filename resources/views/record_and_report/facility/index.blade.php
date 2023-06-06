@extends('layouts.app')
@section('title', 'Facility')
@section('content')

    <div class="card mb-3 bg-white">
        <label>Facility Table</label>

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
                            Description
                        </th>
                        <td class="px-6 py-3">
                            Purpose
                        </td>
                        <td class="px-6 py-3">
                            Status
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
