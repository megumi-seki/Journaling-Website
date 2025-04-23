@props(["mainPadding" => "", "gap" => "", "pageTitle" => ""])
<x-base-layout>
    <x-layouts.header :$pageTitle />
    <main class="pt-medium">
        <div class="flex-col ta-center max-w-80 m-auto {{ $gap }} {{ $mainPadding }}">
        {{ $slot }}
        </div>
    </main>
</x-base-layout>