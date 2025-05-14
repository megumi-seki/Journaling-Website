@props(["pageTitle" => null])

<a href="{{ $pageTitle ? route('contents.index') : route('top') }}">
    <img class="app-icon" src="{{ asset('img/dearjournal-icon.png') }}" alt="app-icon">
</a>