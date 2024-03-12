<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="png" href="{{ asset('image/branding.png') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body class="font-sans antialiased text-gray-900">
    @include('layouts.tailwindcss')
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <a href="{{ url('/') }}">
                <img src="{{ asset('image/branding.png') }}" alt="AQUALAB PH" class="h-20 text-gray-500 fill-current">
                {{-- AQUA LAB PH --}}
            </a>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            @yield('content')
        </div>
    </div>
</body>

</html>