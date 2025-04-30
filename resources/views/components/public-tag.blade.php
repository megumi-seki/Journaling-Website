@props(["isTagged"])

<button class= "tag-wrapper {{ $isTagged ? '' : 'hidden'}}">
    <div class="tag-t p-tagged-t"></div>
    <div class="tag-l p-tagged-l"></div>
    <div class="tag-r p-tagged-r"></div>
</button>     

<button class="tag-wrapper {{ !$isTagged ? '' : 'hidden'}}">
    <div class="tag-t p-not-tagged-t"></div>
    <div class="tag-l p-not-tagged-l"></div>
    <div class="tag-r p-not-tagged-r"></div>
</button>        