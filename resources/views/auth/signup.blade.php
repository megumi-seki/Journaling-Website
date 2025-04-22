<x-guest-layout>
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

        <x-slot:footerLink>
            <p class="mtb-smaller inline-flex gap-1 font-small">Already have an account?
                <a href="#" class="reset-def color-main">-click here to login</a>
            </p>
        </x-slot:footerLink>  
        
</x-guest-layout>