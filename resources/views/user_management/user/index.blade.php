@extends('layouts.app')
@section('title', 'User Lists table')
@section('content')

    <div class="mb-3 bg-white card">

        <div class="flex justify-between">
            @include('components.search')

            <div class="flex items-center">
                <a class="btn btn-primary" href="{{ route('register') }}">Add new User</a>
            </div>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            E-mail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $user->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->role }}
                            </td>
                            <td class="px-6 py-4">

                                @if ($user->status == '0')
                                    <span class="mr-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                                        Inactive
                                    </span>
                                @else
                                    <span
                                        class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                        Active
                                    </span>
                                @endif

                            </td>
                            <td class="px-6 py-4 text-right">

                                @if ($user->status == '0')
                                    <form action="{{ route('user-management.user-lists.setAsActive', $user) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="font-medium text-blue-600 hover:underline">
                                            Set as Active
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('user-management.user-lists.setAsInactive', $user) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="font-medium text-blue-600 hover:underline">
                                            Set as Inactive
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $users->links() }}
        </div>
    </div>

@endsection
