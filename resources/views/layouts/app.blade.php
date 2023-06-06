<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="png" href="{{ asset('image/branding.png') }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.tailwindcss')
        @include('layouts.navigation')
        @include('layouts.modals')

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 uppercase text-slate-500 sm:px-6 lg:px-8">

                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                <svg aria-hidden="true" class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>

                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-6 w-6 text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">@yield('title')</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </header>

        <!-- Page Content -->
        <main class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
        @include('components.alert')
            @yield('content')
        </main>
    </div>
</body>

</html>
