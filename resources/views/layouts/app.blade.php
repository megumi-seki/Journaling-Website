@props(["mainPadding" => ""])
<x-base-layout>
    <x-layouts.header />
    <main class="main-top-p">
        <div class="{{ $mainPadding }}">
        {{ $slot }}
        </div>
    </main>
</x-base-layout>