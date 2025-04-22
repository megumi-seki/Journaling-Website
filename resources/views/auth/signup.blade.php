<x-base-layout>
    <main class="p-all-large ta-center">
        <img class="icon" src="{{ asset("img/icon-new.png") }}" alt="icon">
        <form action="#" method="GET" class="flex-col align-center gap-small mtb-small">
            @csrf
            <h2 class="title">Signup</h2>
            <input type="text" name="name" placeholder="Enter your name" class="auth-input">
            <input type="email" name="email" placeholder="Enter your email" class="auth-input">
            <input type="text" name="phone" placeholder="Enter your phone number" class="auth-input">
            <input type="password" name="password" placeholder="Create your password" class="auth-input">
            <input type="password" name="password_confirmation" placeholder="Repeat the password to confirm" class="auth-input">
            <button class="primary-btn">Register</button>
        </form>
        <div class="flex gap-2 justify-center">
            <a href="#" class="btn auth-btn inline-flex justify-center align-center reset-def">
                <img src="{{ asset('/img/google3.png') }}" alt="google"  class="google-img mr-small">
                Google
            </a>
            <a href="#" class="btn auth-btn inline-flex justify-center align-center reset-def">
                <img src="{{ asset('img/facebook.png') }}" alt="facebook" class="facebook-img mr-small">
                Facebook
            </a>
            {{-- <a href="#"><img src="{{ asset('img/google.svg') }}" alt=""></a> --}}
            {{-- <button class="facebook-btn">
                <img src="{{ asset('img/facebook.png') }}" alt="" class="facebook-img">
                Sign up with Facebook
            </button> --}}
        </div>
        <p class="mtb-smaller inline-flex gap-1">Already have an account?
            <a href="#" class="reset-def color-main">-click here to login</a>
        </p>        
    </main>
</x-base-layout>