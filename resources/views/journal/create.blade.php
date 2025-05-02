<x-app-layout mainPadding="m-auto pt-medium max-w-80 mtb" pageTitle="Your New Journal">
        <form action="" class="flex-col">
                <trix-toolbar id="toolbar" class=""></trix-toolbar> 
                @if ($content)
                        <input id="x-{{ $content->id }}" value="{{ $content->content_text }}" type="hidden">
                        <trix-editor toolbar="toolbar" name="new-content"  input="x-{{ $content->id }}"  class="editor-def txta-new editor-abled"  contenteditable="true"></trix-editor> 
                @else
                        <trix-editor toolbar="toolbar" name="new-content" class="editor-def txta-new editor-abled"  contenteditable="true"></trix-editor> 
                @endif
                <div class="flex justify-end">
                        <label for="public0" class="hover-effect inline-flex justify-center gap-smallest btn medium-btn small-checkbox-label mr-small border-r-set bg-white color-main">
                        <input checked type="checkbox" id="public0" name="public" class="small-checkbox">
                               public
                        </label> 
                        <button class="btn medium-btn">Save</button>
                </div>
        </form>
</x-app-layout>