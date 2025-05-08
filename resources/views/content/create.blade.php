<x-app-layout mainPadding="m-auto pt-medium max-w-80 mtb" pageTitle="Your New Journal">
        <trix-toolbar id="toolbar" class=""></trix-toolbar> 
        <form action="{{ $content ? route('contents.update', $content) : route('contents.store') }}" method="POST" class="flex-col">
                @csrf
                @if ($content)
                @method("PATCH")
                <input id="x-{{ $content->id }}" name="content_text" value="{{ $content->content_text }}" type="hidden" class="trix-input-to-edit">
                <trix-editor id="trix-editor" toolbar="toolbar" name="new-content"  input="x-{{ $content->id }}"  class="editor-def txta-new editor-abled font-{{ $user->setting->font_style_id}}"  contenteditable="true"></trix-editor> 
                @else
                <input id="new-input" name="content_text" type="hidden" class="trix-input-to-edit">
                <trix-editor toolbar="toolbar" name="new-content" class="editor-def txta-new editor-abled font-{{ $user->setting->font_style_id}}" input="new-input"  contenteditable="true"></trix-editor> 
                @endif

                <div class="flex justify-end">
                        <button id="content-reset-btn" type="button" class="btn medium-btn hover-effect bg-white color-main mr-small {{ $content ? '' : 'hidden'}}">Reset</button>
                        @if ($user->setting->public_mode)
                        <label for="public" class="hover-effect inline-flex justify-center gap-smallest btn medium-btn small-checkbox-label mr-small border-r-set bg-white color-main">
                                <input {{ $content && $content->public ? "checked" : ""}} name="public" type="checkbox" id="public" name="public" class="small-checkbox">
                                        public
                        </label>
                        @endif
                        <button type="submit" class="btn medium-btn mr-small">Save</button>
                </div>
        </form>
        @if ($content)
        <div class="flex justify-end">
        <form action="{{ route('contents.destroy', $content) }}" method="POST" class="mtb-smaller">
                @csrf
                @method("DELETE")
                <button id="content-reset-btn" class="btn medium-btn hover-effect mr-small">Delete</button>
        </form>
        </div>
        @endif
</x-app-layout>