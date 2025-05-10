<x-guest-layout>
   
        <form action="{{ route('login') }}" method="POST" class="auth-form">
            @csrf
            <h2 class="title">Login</h2>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" 
                    class="input-def @error('email') has-error @enderror" value="{{ old('email') }}">
                <div class="error-message">
                    {{ $errors->first("email") }}
                </div>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" 
                    class="input-def @error('password') has-error @enderror">
                <div class="error-message">
                    {{ $errors->first("password") }}
                </div>
            </div>
            <a href="{{ route('forgetPassword.index') }}" class="reset-def color-main font-small ml-auto">Forgot Password?</a>
            <button class="btn large-btn bg-main">Login</button>
        </form>

        <x-google-facebook-oauth />

        <x-slot:footerLink>
            <p class="mtb-smaller inline-flex gap-1 font-small">You don't have an account yet?
                <a href="{{ route('signup.index') }}" class="reset-def color-main">-click here to create one</a>
            </p>        
        </x-slot:footerLink> 
</x-guest-layout>