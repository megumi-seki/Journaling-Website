<x-app-layout mainPadding="m-auto pt-medium max-w-80 mtb" pageTitle="Your New Journal">
        <trix-toolbar id="toolbar" class=""></trix-toolbar> 
        @if ($content)
        <form action="{{ route('contents.update', $content) }}" method="POST" class="flex-col">
                @csrf
                @method("PATCH")
                <input id="x-{{ $content->id }}" name="content_text" value="{{ $content->content_text }}" type="hidden" class="trix-input-to-edit">
                <trix-editor id="trix-editor" toolbar="toolbar" name="new-content"  input="x-{{ $content->id }}"  class="editor-def txta-new editor-abled"  contenteditable="true"></trix-editor> 
        @else
        <form action="{{ route('contents.store') }}" method="POST">
                @csrf
                <input id="new-input" name="content_text" type="hidden" class="trix-input-to-edit">
                <trix-editor toolbar="toolbar" name="new-content" class="editor-def txta-new editor-abled" input="new-input"  contenteditable="true"></trix-editor> 
        @endif
        <div class="flex justify-end">
                <label for="public0" class="hover-effect inline-flex justify-center gap-smallest btn medium-btn small-checkbox-label mr-small border-r-set bg-white color-main">
                <input checked name="public" type="checkbox" id="public0" name="public" class="small-checkbox">
                       public
                </label>
                @if ($content)
                        <button id="content-reset-btn" type="button" class="btn medium-btn hover-effect bg-white color-main mr-small">Reset</button>
                @endif
                <button type="submit" class="btn medium-btn mr-small">Save</button>
        </form>
        @if ($content)
        <form action="{{ route('contents.destroy', $content) }}" method="POST">
                @csrf
                @method("DELETE")
                <button id="content-reset-btn" class="btn medium-btn hover-effect bg-white color-main mr-small">Delete</button>
        </form>
        @endif
        </div>
</x-app-layout>