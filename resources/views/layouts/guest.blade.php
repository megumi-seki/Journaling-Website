<x-base-layout>
    @session("success")
        <p class="s-message">{{ session("success") }}</p>
    @endsession
    @session("error")
        <p class="e-message">{{ session("error") }}</p>
    @endsession
    <main class="pt-large ta-center">
        <p class="information guest-info">Thank you for visiting!<br/>This website is still under development.</p>
        <x-buttons.app-icon />
        {{ $slot }}

        {{ $footerLink }}
    </main>
</x-base-layout>