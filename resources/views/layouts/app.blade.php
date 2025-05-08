@props(["mainPadding" => "", "gap" => "", "pageTitle" => "", "taCenter" => "", "user" => null])
<x-base-layout :$user>
    <x-layouts.header :$pageTitle :$user />
    <x-layouts.sidebar :$pageTitle />
    <main class="pt-medium">
        <div class="flex-col max-w-80 m-auto {{ $gap }} {{ $mainPadding }} {{ $taCenter }}">
            @session("success")
            <p class="m-auto ta-center width-max br-small bg-success color-white font-small">{{ session("success") }}</p>
            @endsession
            {{ $slot }}
        </div>
    </main>
</x-base-layout>