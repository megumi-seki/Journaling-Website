<x-app-layout mainMargin="mtb-small" pageTitle="Your Journals" :$user>

    <section id="filter-weapper" class="hidden-when-large hidden">
        <form action="{{ route('content.filter' )}}" method="GET" class="search-form filter-group bg-white">   
            <x-hashtag-dropdown />
            <x-keyword-dropdown />
            <x-year-month-dropdown />
            <x-day-of-week-dropdown />
            <x-tag-dropdown />
            <x-reset-search-button />
        </form>
    </section>

    <section id="search-bar" class="search-wrapper">
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


    <div id="new-content-wrapper">
            <span class="font-small ml-small">Your new journal</span>
            <div class="txta-wrapper">
                <form action="{{ route('contents.store') }}" method="POST" id="new-content" class="txta-wrapper">  
                @csrf     
                    <input name="content_text" id="x" type="hidden">
                    <trix-toolbar id="y" class="new-small-toolbar"></trix-toolbar>
                    <trix-editor toolbar="y" input="x" class="editor-def new-editor editor-abled font-{{ $setting->font_style_id }}"></trix-editor>
                    @if ($setting->public_mode)
                    <label for="new-public" class="btn small-btn bg-main hover-effect small-public-btn new-public-btn">
                        <input type="checkbox" id="new-public" name="public" class="small-checkbox">
                        public
                    </label>
                    @endif
                </form>
                <div class="btn-wrapper flex">
                    <form action="{{ route('contents.create') }}" method="GET" class="inline-flex">
                        <button class="btn small-btn hover-effect bg-main border-lt">Expand</button>
                    </form>
                    <button form="new-content" type="submit" class="btn small-btn hover-effect bg-main border-rb border-r-set">
                        Save
                    </button>
                </div>
            </div>
    </div>
    
    <section id="contents-section">
        @forelse ($contents as $content)
        <div id="content-wrapper">
            <div class="flex">
                <span class="ml-small mr-small font-small font-{{ $setting->font_style_id }}">{{ $content->created_at->isoFormat("dddd, MMMM D, YYYY h:mm A") }}</span> 
                @if ($setting->public_mode)
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
                    <trix-editor id="trix-editor" toolbar="hidden-toolbar-{{ $content->id }}" input="x-{{ $content->id }}"
                        class="editor-def set-h font-{{ $setting->font_style_id }}" contenteditable="false"></trix-editor>         
                    <x-edit-remove-icon :public="$setting->public_mode" />
                    <x-edit-icon />
                    @if ($setting->public_mode)
                    <label for="public-{{ $content->id }}" class="btn small-btn small-public-btn hidden-when-medium btn-to-toggle">
                        <input disabled {{ $content->public ? "checked" : "" }} type="checkbox" id="public-{{ $content->id }}" name="public" class="small-checkbox">
                        public
                    </label>
                    @endif
                </form>
                <x-small-buttons :$content />
            </div>
        </div>
        @empty
        <p class="font-small ta-center">{{ $message }}</p>
        @endforelse

    </section>
    {{ $contents->onEachSide(1)->links() }}
    <button class="toTopBtn btn-def-unset color-main ta-center font-small mtb-small {{ $contents->count() > 1 ? '' : 'hidden' }}">To top</button>
</x-app-layout>