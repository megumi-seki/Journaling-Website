<x-guest-layout>
        <form action="{{ route('signup') }}" method="POST" class="flex-col align-center gap-smallest mtb-small">
            @csrf
            <h2 class="title">Signup</h2>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name" 
                    class="input-def @error("name") has-error  @enderror" value="{{ old('name') }}">
                <div class="error-message">
                    {{ $errors->first("name") }}
                </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" 
                    class="input-def @error("email") has-error  @enderror" value="{{ old('email') }}">
                <div class="error-message">
                    {{ $errors->first("email") }}
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter your phone number" 
                    class="input-def @error("phone") has-error  @enderror" value="{{ old('phone') }}">
                <div class="error-message">
                    {{ $errors->first("phone") }}
                </div>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Create your password" class="input-def  @error("password") has-error  @enderror">
                <div class="error-message">
                    {{ $errors->first("password") }}
                </div>
            </div>
            <input type="password" name="password_confirmation" placeholder="Repeat the password to confirm" class="input-def">
            <button class="primary-btn">Register</button>
        </form>

        <x-slot:footerLink>
            <p class="mtb-smaller inline-flex gap-1 font-small">Already have an account?
                <a href="{{ route('login.index') }}" class="reset-def color-main">-click here to login</a>
            </p>
        </x-slot:footerLink>  
        
</x-guest-layout>