@props(["mainPadding" => "", "gap" => "", "pageTitle" => "", "taCenter" => ""])
<x-base-layout>
    <x-layouts.header :$pageTitle />
    <x-layouts.sidebar :$pageTitle />
    <main class="pt-medium">
        <div class="flex-col max-w-80 m-auto {{ $gap }} {{ $mainPadding }} {{ $taCenter }}">
        {{ $slot }}
        </div>
    </main>
</x-base-layout>