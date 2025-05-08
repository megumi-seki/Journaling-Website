<x-base-layout>
    @session("success")
        <p class="m-auto ta-center width-max br-small bg-success color-white font-small">{{ session("success") }}</p>
    @endsession
    <main class="pt-large ta-center">
        <x-buttons.app-icon />
        {{ $slot }}

        {{ $footerLink }}
             
    </main>
</x-base-layout>