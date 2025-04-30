@props(["content"])

<button class="tag-wrapper {{ $content->tag ? "" : "hidden" }}">
    <div class="tag-t"></div>
    <div class="tag-l"></div>
    <div class="tag-r"></div>
</button>

<button class="tag-wrapper {{ !$content->tag ? "" : "hidden" }}">
    <div class="tag-t not-tagged-t"></div>
    <div class="tag-l not-tagged-l"></div>
    <div class="tag-r not-tagged-r"></div>
</button>        