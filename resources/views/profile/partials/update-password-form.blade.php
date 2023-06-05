@if (session('status') === 'password-updated')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            toastr.success('Your password has been successfully updated.');
        });
    </script>
@endif
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="current_password">Current password</label>
            <input id="current_password" name="current_password" type="password" autocomplete="current-password"
                class="@error('current_password', 'updatePassword') invalid @enderror" />
            @foreach ($errors->updatePassword->get('current_password') as $error)
                <span class="invalid" role="alert">
                    <strong>{{ $error }}</strong>
                </span>
            @endforeach
        </div>

        <div>
            <label for="password">New Password</label>
            <input id="password" name="password" type="password" autocomplete="new-password"
                class="@error('password', 'updatePassword') invalid @enderror" />
            @foreach ($errors->updatePassword->get('password') as $error)
                <span class="invalid" role="alert">
                    <strong>{{ $error }}</strong>
                </span>
            @endforeach
        </div>

        <div>
            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                class="@error('password_confirmation', 'updatePassword') invalid @enderror" />
            @foreach ($errors->updatePassword->get('password_confirmation') as $error)
                <span class="invalid" role="alert">
                    <strong>{{ $error }}</strong>
                </span>
            @endforeach
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">Save changes</button>
        </div>
    </form>
</section>
