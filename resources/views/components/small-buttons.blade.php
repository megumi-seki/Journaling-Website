@props(['content'])

<div class="btn-wrapper hidden-when-medium flex">
    <form action="{{ route('contents.edit', $content)}}" method="GET" class="inline-flex">
        <button class="btn small-btn bg-main hover-effect border-lt">
            Expand
        </button>
    </form>
    <button class="btn small-btn bg-main edit-btn hover-effect">
        Edit
    </button>
    <button disabled form="content-{{ $content->id }}" type="submit" class="btn small-btn btn-to-toggle">
        Save
    </button>
    <form action="{{ route('contents.destroy', $content->id) }}" method="POST" class="inline-flex">
        @csrf
        @method("DELETE")
        <button disabled class="btn small-btn delete-btn btn-to-toggle border-rb border-r-set">Delete</button>
    </form>
</div>

