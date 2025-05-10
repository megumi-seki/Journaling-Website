<x-guest-layout>
   
    <form action="{{ route('forgetPassword.email') }}" method="POST" class="auth-form">
        @csrf
        <h2 class="title">Request Password Reset</h2>
        <div class="form-group mtb-small">
            <input type="email" name="email" placeholder="Enter your email" 
                class="input-def @error('email') has-error @enderror" value="{{ old('email') }}">
            <div class="error-message">
                {{ $errors->first("email") }}
            </div>
        </div>
       
        <button class="primary-btn">Request</button>
    </form>

    <x-google-facebook-oauth />
    
    <x-slot:footerLink>
        <p class="mtb-smaller inline-flex gap-1 font-small">You don't have an account yet?
            <a href="{{ route('signup.index') }}" class="reset-def color-main">-click here to create one</a>
        </p>        
    </x-slot:footerLink> 
</x-guest-layout>