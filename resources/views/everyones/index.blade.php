<x-app-layout mainPadding="pt-small" pageTitle="Everyone's Journals" :$user>

    <section id="filter-weapper" class="hidden-when-large hidden-when-medium">
        <form action="{{ route('everyone.filter')}}" method="GET" class="search-form filter-group bg-white">   
            <x-hashtag-dropdown />
            <x-keyword-dropdown />
            <x-sent-hug-heart-dropdown />
            <x-tag-dropdown />
            <x-reset-search-button />
        </form>
    </section>

    <section id="search-section" class="search-wrapper mtb-small">
        <x-filter-button />
        <form action="{{ route('everyone.filter')}}" method="GET" class="search-form search-group bg-white">   
            <x-hashtag-dropdown />
            <x-sent-hug-heart-dropdown />
            <x-tag-dropdown />
            <x-keyword-dropdown />
            <x-reset-search-button />
        </form>
    <x-order-dropdown-form />

</section>  

<section id="contents-section-pub" data-offset="{{ count($contents) }}" class="flex-col gap-1 pb-small">

    @forelse ($contents as $content)
    <div id="content-wrapper" class="flex-col">
        <div class="flex space-between align-center">
            <div class="flex  align-center">
                <img src="{{ $content->user->userIcon->image_path }}" class="user-icon" alt="User Icon">
                <span class="user-name font-small pl-smaller">{{ $content->user->user_name }}</span>
            </div>
            <span class="ml-small font-small">{{ $content->created_at->isoFormat("MMMM D, YYYY h:mm A") }}</span> 
        </div>
        <div class="txta-wrapper">
            @unless($content->user_id == $user->id)
            <x-public-tag :$content :$user />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <x-heart-big :$content :isSentHeart="$content->isSentHeart($user)" />
                <x-hug-big :$content :isSentHug="$content->isSentHug($user)" />           
            </div>
            @endunless
            <input id="x-{{ $content->id }}" value="{{ $content->content_text }}" type="hidden">
            <trix-toolbar id="my_toolbar" class="hidden"></trix-toolbar>
            <trix-editor toolbar="my_toolbar" input="x-{{ $content->id }}" class="pub-editor font-{{ $content->user->setting->font_style_id }}" contenteditable="false"></trix-editor>
        </div>
    </div>
    @empty
        
    @endforelse
</section>
{{ $contents->onEachSide(1)->links() }}
<button class="toTopBtn btn-def-unset color-main ta-center font-small">To top</button>
</x-app-layout>


{{-- TODO 
    -render hashtags in journal and public page
 --}}