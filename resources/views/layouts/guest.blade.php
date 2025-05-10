<x-base-layout>
    @session("success")
        <p class="s-message">{{ session("success") }}</p>
    @endsession
    <main class="pt-large ta-center">
        <x-buttons.app-icon />
        {{ $slot }}

        {{ $footerLink }}
             
    </main>
</x-base-layout>