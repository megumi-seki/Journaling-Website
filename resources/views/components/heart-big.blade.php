@props(["content", "isSentHeart"])

<button class="heart-wrapper btn-def-unset" data-id="{{ $content->id }}" data-heart="{{ $isSentHeart }}">
    <img src="{{ asset('img/heart-with-colors.png') }}" alt="Remove heart button" 
        class="heart-big toggle {{ $isSentHeart ? '' : 'hidden' }}">
    <img src="{{ asset('img/heart-transparent.png') }}" alt="Send heart button" 
        class="heart-t-big toggle {{ !$isSentHeart ? '' : 'hidden' }}">
</button>