@props(["mainPadding" => ""])
<x-base-layout>
    <x-layouts.header />
    <main class="main-top-p">
        <div class="flex-col w-80 m-auto gap-1 {{ $mainPadding }}">
        {{ $slot }}
        </div>
    </main>
</x-base-layout>