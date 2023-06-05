@extends('layouts.guest')
@section('content')
    <div class="mb-3 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="my-3 flex justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="mb-3">
                <button class="btn btn-primary">
                    Resend Verification Email
                </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn-secondary">
                Log Out
            </button>
        </form>
    </div>
@endsection
