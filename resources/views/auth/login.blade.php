<x-guest-layout>
   
        <form action="#" method="GET" class="flex-col align-center gap-small mtb-small">
            @csrf
            <h2 class="title">Login</h2>
            <input type="email" name="email" placeholder="Enter your name" class="input-def">
            <input type="password" name="password" placeholder="Enter your password" class="input-def">
            <button class="primary-btn">Login</button>
        </form>

        <x-slot:footerLink>
            <p class="mtb-smaller inline-flex gap-1 font-small">You don't have an account yet?
                <a href="{{ route('signup') }}" class="reset-def color-main">-click here to create one</a>
            </p>        
        </x-slot:footerLink> 
    
</x-guest-layout>