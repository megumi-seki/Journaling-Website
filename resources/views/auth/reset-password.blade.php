<x-guest-layout>
    <form action="{{ route('password.update') }}" method="POST" class="auth-form-width m-auto flex-col align-center gap-smallest mtb-small">
        @csrf
        <h2 class="title">Reset Password</h2>
        <input type="hidden" name="token" value="{{ request('token') }}">
        <input type="hidden" name="email" value="{{ request('email') }}">
        <div class="form-group">
            <input readonly type="email" placeholder="Enter your email" 
                class="input-def @error('email') has-error @enderror" value="{{ request("email") }}">
            <div class="error-message">
                {{ $errors->first("email") }}
            </div>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Create your new password" 
                class="input-def @error('password') has-error @enderror">
            <div class="error-message">
                {{ $errors->first("password") }}
            </div>
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Repeat the new password to confirm" class="input-def">
        </div>
        <button type="submit" class="primary-btn mtb-smaller">Reset password</button>
    </form>

    <x-slot:footerLink>
    </x-slot:footerLink> 
</x-guest-layout>