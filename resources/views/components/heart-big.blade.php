@props(["content", "isSentHeart"])

<button class="heart-wrapper btn-def-unset" data-id="{{ $content->id }}" data-heart="{{ $isSentHeart }}">
    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" 
        class="heart-big ml-minus-smaller toggle {{ $isSentHeart ? '' : 'hidden' }}">
    <img src="{{ asset('img/heart-transparent.png') }}" alt="" 
        class="heart-t-big ml-minus-smaller toggle {{ !$isSentHeart ? '' : 'hidden' }}">
</button>