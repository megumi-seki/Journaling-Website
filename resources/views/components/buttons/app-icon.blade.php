@props(["user" => null])

<a href="{{ $user ? route('contents.index') : route('top') }}">
    <img class="app-icon" src="{{ asset('img/dearjournal-icon.png') }}" alt="app-icon">
</a>