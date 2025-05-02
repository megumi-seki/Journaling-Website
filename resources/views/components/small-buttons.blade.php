@props(['content'])

<div class="btn-wrapper hidden-when-medium flex">
    <label for="public2" class="btn-to-toggle inline-flex justify-center gap-smallest btn small-btn small-checkbox-label font-smaller mr-small border-r-set">
        <input disabled {{ $content->public ? "checked" : "" }} type="checkbox" id="public2" name="public" class="small-checkbox ver-al">
        public
    </label>
    <a href="{{ route('contents.create') }}?content_id={{ $content->id }}" class="expand-btn small-btn hover-effect border-lt ta-center reset-def">Expand</a>
    <button class="edit-btn hover-effect small-btn">Edit</button>
    <button disabled class="btn-to-toggle small-btn">Save</button>
    <form action="{{ route('contents.destroy', $content->id) }}" method="POST" class="inline-flex">
        @csrf
        @method("DELETE")
        <button disabled class="delete-btn btn-to-toggle small-btn border-rb">Delete</button>
    </form>
</div>

