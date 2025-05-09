<x-app-layout mainPadding="m-auto pt-medium max-w-80 mtb" pageTitle="Your New Journal" :$user>
        <trix-toolbar id="toolbar" class=""></trix-toolbar> 
        <form action="{{ route('contents.store') }}" method="POST" class="flex-col">
                @csrf
                <input id="new-input" name="content_text" type="hidden" class="trix-input-to-edit">
                <trix-editor toolbar="toolbar" name="new-content" class="editor-def txta-new editor-abled font-{{ $user->setting->font_style_id}}" input="new-input"  contenteditable="true"></trix-editor> 
                <div class="flex justify-end">
                        @if ($user->setting->public_mode)
                        <label for="public" class="hover-effect inline-flex justify-center gap-smallest btn medium-btn small-checkbox-label mr-small border-r-set bg-white color-main">
                                <input name="public" type="checkbox" id="public" name="public" class="small-checkbox">
                                        public
                        </label>
                        @endif
                        <button type="submit" class="btn medium-btn mr-small">Save</button>
                </div>
        </form>
    </x-app-layout>