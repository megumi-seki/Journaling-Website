<x-app-layout mainMargin="mtb-medium" pageTitle="Edit Entry" :$user>
        <trix-toolbar id="toolbar" class=""></trix-toolbar> 
        <form action="{{ route('contents.update', $content) }}" method="POST" class="flex-col">
                @csrf
                @method("PATCH")
                <input id="x-{{ $content->id }}" name="content_text" value="{{ $content->content_text }}" type="hidden" class="trix-input-to-edit">
                <trix-editor id="trix-editor" toolbar="toolbar" name="new-content"  input="x-{{ $content->id }}"  
                    class="editor-def txta-expanded editor-abled font-{{ $user->setting->font_style_id}}"  contenteditable="true">
                </trix-editor> 
                <div class="flex justify-end">
                        <button id="content-reset-btn" type="button" class="btn medium-btn hover-effect bg-white color-main mr-small">
                                Reset
                        </button>
                        @if ($user->setting->public_mode)
                                <label for="public" class="btn medium-btn hover-effect inline-flex justify-center align-center gap-smallest mr-small">
                                        <input {{ $content && $content->public ? "checked" : ""}} name="public" type="checkbox" id="public" 
                                                name="public" class="small-checkbox">public
                                </label>
                        @endif
                        <button type="submit" class="btn medium-btn bg-main mr-small">Save</button>
                </div>
        </form>
        <div class="flex justify-end">
                <form action="{{ route('contents.destroy', $content) }}" method="POST" class="mtb-smaller">
                        @csrf
                        @method("DELETE")
                        <button id="content-reset-btn" class="btn medium-btn hover-effect mr-small">Delete</button>
                </form>
        </div>
</x-app-layout>