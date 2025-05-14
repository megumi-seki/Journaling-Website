@props(["mainMargin" => "", "gap" => "", "pageTitle" => null, "user" => null])
<x-base-layout :$user>
    <p class="information">Thank you for visiting!<br/>This website is still under development.</p>
    <x-layouts.header :$pageTitle />
    <x-layouts.sidebar :$pageTitle />
    <main class="pt-medium">
        @session("success")
            <p class="s-message">{{ session("success") }}</p>
        @endsession
        <div class="flex-col max-w-80 m-auto {{ $gap }} {{ $mainMargin }}">
            {{ $slot }}
        </div>
    </main>
</x-base-layout>