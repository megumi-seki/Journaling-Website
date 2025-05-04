@props(["content", "user"])

<button class= "p-tag-wrapper {{ $content->isTagged($user) ? '' : 'hidden'}}"
    data-id="{{ $content->id }}" data-tagged="1">
    <div class="tag-t p-tagged-t"></div>
    <div class="tag-l p-tagged-l"></div>
    <div class="tag-r p-tagged-r"></div>
</button>     

<button class="p-tag-wrapper {{ !$content->isTagged($user) ? '' : 'hidden'}}"
    data-id="{{ $content->id }}" data-tagged="0">
    <div class="tag-t p-not-tagged-t"></div>
    <div class="tag-l p-not-tagged-l"></div>
    <div class="tag-r p-not-tagged-r"></div>
</button>        