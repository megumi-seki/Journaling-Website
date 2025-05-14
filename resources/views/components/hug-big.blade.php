@props(["content", "isSentHug"])

<button class="hug-wrapper btn-def-unset" data-id="{{ $content->id }}" data-hug="{{ $isSentHug }}">
    <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="Remove hug button" 
        class="hug-big toggle {{ $isSentHug ? '' : 'hidden' }}">
    <img src="{{ asset('img/hug-transparent.png')}}" alt="Send hug button" 
        class="hug-t-big toggle {{ !$isSentHug ? '' : 'hidden' }}">
</button>
