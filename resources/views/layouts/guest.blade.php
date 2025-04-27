<x-base-layout>
    <main class="pt-large ta-center">
        <x-buttons.app-icon />
        {{ $slot }}

        <div class="flex gap-2 justify-center">
            <a href="#" class="btn auth-btn inline-flex justify-center align-center reset-def">
                <img src="{{ asset('/img/google3.png') }}" alt="google"  class="google-img mr-smaller">
                Google
            </a>
            <a href="#" class="btn auth-btn inline-flex justify-center align-center reset-def">
                <img src="{{ asset('img/facebook.png') }}" alt="facebook" class="facebook-img mr-smaller">
                Facebook
            </a>
        </div>

        {{ $footerLink }}
             
    </main>
</x-base-layout>