<x-app-layout mainPadding="pt-small" pageTitle="Your Journals" :$user>

    <section id="filter-weapper" class="hidden-when-large hidden-when-medium">
        <form action="{{ route('content.filter' )}}" method="GET" class="search-form filter-group bg-white">   
            <x-hashtag-dropdown />
            <x-keyword-dropdown />
            <x-year-month-dropdown />
            <x-day-of-week-dropdown />
            <x-tag-dropdown />
            <x-reset-search-button />
        </form>
    </section>

    <section id="search-bar" class="search-wrapper mtb-small">
        <x-filter-button />
        <form action="{{ route('content.filter' )}}" method="GET" class="search-form search-group bg-white">   
            <x-year-month-dropdown />
            <x-day-of-week-dropdown />
            <x-tag-dropdown />
            <x-hashtag-dropdown />
            <x-keyword-dropdown />
            <x-reset-search-button />
        </form>

    <x-order-dropdown-form />
    </section>  

    <section id="contents-section" class="flex-col gap-2 pb-small">
        <div id="content-wrapper">
            <span class="font-small ml-small">Your new journal</span>
            <form action="{{ route('contents.store') }}" method="POST" class="txta-wrapper">  
            @csrf     
                <input name="content_text" id="x" type="hidden">
                <trix-toolbar id="my_toolbar" class="new-small-toolbar"></trix-toolbar>
                <trix-editor toolbar="my_toolbar" input="x" class="editor-def editor-abled font-{{ $user->setting->font_style_id }}"></trix-editor>
                <div class="add-btn-for-new flex">
                    @if ($user->setting->public_mode)
                    <label for="public-0" class="hover-effect inline-flex justify-center gap-smallest btn small-btn small-checkbox-label font-smaller mr-small border-r-set">
                        <input type="checkbox" id="public-0" name="public" class="small-checkbox ver-al">
                        public
                    </label>
                    @endif
                    <a href="{{ route('contents.create') }}" class="expand-btn hover-effect small-btn border-lt ta-center reset-def">Expand</a>
                    <button type="submit" class="hover-effect small-btn border-rb border-r-set">Save</button>
                </div>
            </form>
        </div>

        @forelse ($contents as $content)
        <div id="content-wrapper">
            <div class="flex">
            <span class="ml-small mr-small font-small font-{{ $user->setting->font_style_id }}">{{ $content->created_at->isoFormat("dddd, MMMM D, YYYY h:mm A") }}</span> 
                @if ($user->setting->public_mode)
                <div class="flex align-center {{ $content->public ? '' : 'opacity' }}">
                    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                    <span class="font-small mr-smaller">        
                        {{ $content->sentHeartUsers->count() ?: "" }}
                    </span>
                    <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                    <span class="font-small mr-smaller">
                        {{ $content->sentHugUsers->count() ?: "" }}
                    </span>
                </div>
                @endif
            </div>
            <div class="txta-wrapper">
                <x-tag :$content /> 
                <form id="content-{{ $content->id }}" action="{{ route('contents.update', $content->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <input id="x-{{ $content->id }}" name="content_text" value="{{ $content->content_text }}" type="hidden" class="trix-input">
                    <trix-toolbar id="hidden-toolbar-{{ $content->id }}" class="small-toolbar hidden"></trix-toolbar>
                    <trix-editor id="trix-editor" toolbar="hidden-toolbar-{{ $content->id }}" input="x-{{ $content->id }}" class="editor-def font-{{ $user->setting->font_style_id }}" contenteditable="false"></trix-editor>         
                    <x-edit-remove-icon :public="$user->setting->public_mode" />
                    <x-edit-icon />
                    @if ($user->setting->public_mode)
                    <label for="public-{{ $content->id }}" class="public-label hidden-when-medium btn-to-toggle inline-flex justify-center gap-smallest btn small-btn small-checkbox-label font-smaller mr-small border-r-set">
                        <input disabled {{ $content->public ? "checked" : "" }} type="checkbox" id="public-{{ $content->id }}" name="public" class="small-checkbox ver-al">
                        public
                    </label>
                    @endif
                </form>
                <x-small-buttons :$content />
            </div>
        </div>
        @empty
        <p class="font-small ta-center">You don't have any journal yet</p>
        @endforelse
       
    </section>
    {{ $contents->onEachSide(1)->links() }}
    <button class="toTopBtn btn-def-unset color-main ta-center font-small">To top</button>
</x-app-layout>