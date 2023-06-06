<div class="mb-3">
    <h1 class="mb-3">General Information</h1>
    <label for="account_name">Account Name</label>
    <input id="account_name" type="text" name="account_name" value="{{ old('account_name') }}" required autofocus
        autocomplete="account_name">
    @error('account_name')
        <span class="invalid" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


