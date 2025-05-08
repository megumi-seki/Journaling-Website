@props(["user" => null])

<a href="{{ $user ? route('contents.index') : route('top') }}">
    <img class="app-icon" src="{{ asset('img/icon-new.png') }}" alt="app-icon">
</a>