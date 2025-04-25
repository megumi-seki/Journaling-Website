<x-app-layout mainPadding="pt-small" pageTitle="Your Journals">

    <section id="filter-weapper" class="hidden">
        <form action="#" class=" filter-group bg-white">   
            @csrf
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
    <form action="#" class="search-group bg-white">   
        @csrf
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
            <span class="font-small pl-small">Your new journal</span>
            <div class="txta-wrapper">        
                <textarea name="" id="" class="txta-def"></textarea>
                <div class="add-btn-for-new flex">
                    <label for="public1" class="inline-flex justify-center gap-smallest btn small-btn small-checkbox-label font-smaller mr-small border-r-set">
                        <input disabled checked type="checkbox" id="public1" name="public" class="small-checkbox ver-al">
                        public
                    </label>
                    <button class="btn small-btn border-lt hover-effect">Expand</button>
                    <button class="btn small-btn border-rb border-r-set">Save</button>
                </div>
            </div>
        </div>
        <div id="content-wrapper">
            <div class="flex align-center">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                <span class="font-small mr-smaller">10</span>
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                <span class="font-small mr-smaller">10</span>
            </div>
            <div class="txta-wrapper">
                <x-not-tagged-icon />           
                <textarea disabled name="" id="" class="txta-def"></textarea>
                <x-edit-remove-icon />
                <x-edit-icon />
                <x-small-buttons />
            </div>
        </div>
        <div id="content-wrapper">
            <div class="flex align-center">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                <span class="font-small mr-smaller">10</span>
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                <span class="font-small mr-smaller">10</span>
            </div>
            <div class="txta-wrapper">
                <x-not-tagged-icon />           
                <textarea disabled name="" id="" class="txta-def"></textarea>
                <x-edit-remove-icon />
                <x-edit-icon />
                <x-small-buttons />
            </div>
        </div>
        <div id="content-wrapper">
            <div class="flex align-center">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                <span class="font-small mr-smaller">10</span>
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                <span class="font-small mr-smaller">10</span>
            </div>
            <div class="txta-wrapper">
                <x-not-tagged-icon />           
                <textarea disabled name="" id="" class="txta-def"></textarea>
                <x-edit-remove-icon />
                <x-edit-icon />
                <x-small-buttons />
            </div>
        </div>

    </section>
        <a href="#" class="reset-def color-main block ta-center width-small m-auto">Show more</a>
</x-app-layout>