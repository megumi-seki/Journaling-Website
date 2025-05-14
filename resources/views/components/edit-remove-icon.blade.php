@props(["isPublic"])

<button type="button" class="edit-remove-icon hidden-when-medium @if (!$isPublic) adjust-edit-remove @endif">
    <div class="edit-remove-line m-auto"></div> 
</button>