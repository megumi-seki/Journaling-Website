@props(["isSentHeart"])

<button class="btn-def-unset">
    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" 
        class="heart-big ml-minus toggle {{ $isSentHeart ? '' : 'hidden' }}">
    <img src="{{ asset('img/heart-transparent.png') }}" alt="" 
        class="heart-t-big ml-minus toggle {{ !$isSentHeart ? '' : 'hidden' }}">
</button>