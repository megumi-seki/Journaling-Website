@props(["mainMargin" => "", "gap" => "", "pageTitle" => "", "user" => null])
<x-base-layout :$user>
    <x-layouts.header :$pageTitle :$user />
    <x-layouts.sidebar :$pageTitle />
    <main class="pt-medium">
        <div class="flex-col max-w-80 m-auto {{ $gap }} {{ $mainMargin }}">
            @session("success")
            <p class="s-message">{{ session("success") }}</p>
            @endsession
            {{ $slot }}
        </div>
    </main>
</x-base-layout>