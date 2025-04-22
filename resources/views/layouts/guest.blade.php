<x-base-layout>
    <main class="p-all-large ta-center">
        <img class="icon" src="{{ asset("img/icon-new.png") }}" alt="icon">
        {{ $slot }}

        <div class="flex gap-2 justify-center">
            <a href="#" class="btn auth-btn inline-flex justify-center align-center reset-def">
                <img src="{{ asset('/img/google3.png') }}" alt="google"  class="google-img mr-small">
                Google
            </a>
            <a href="#" class="btn auth-btn inline-flex justify-center align-center reset-def">
                <img src="{{ asset('img/facebook.png') }}" alt="facebook" class="facebook-img mr-small">
                Facebook
            </a>
        </div>

        {{ $footerLink }}
             
    </main>
</x-base-layout>