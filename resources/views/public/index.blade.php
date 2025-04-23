<x-app-layout mainPadding="p-all-small" pageTitle="Everyone's Journals">
    <div class="search-wrapper mtb-small">
    <form action="#" class="search-group bg-white">   
        @csrf
        <input type="text" name="hashtag" placeholder="#Hashtag" class="search-input pl-small width-medium mr-smaller">
        <input type="text" name="keyword" placeholder="Free key words" class="search-input pl-small width-medium mr-smaller">
        <select name="tag" id="" class="search-input mr-small">
            <option value="">Tagged or not</option>
            <option value="">Tagged</option>
            <option value="">Not tagged</option>
        </select>
        <button class="btn search-btn mr-smaller bg-white">Reset</button>
        <button class="btn search-btn">Search</button>
    </form>
    <form action="#" class="ml-auto" class="search-input">   
        @csrf
        <select class="search-input">
            <option value="">Order</option>
            <option value="">Latest to the top</option>
            <option value="">Ordest to the top</option>
        </select>
    </form>
    </div>  
    <section id="contents-section" class="flex-col gap-1 pb-small">
        <div id="content-wrapper">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
            <div class="txta-wrapper">
                <span class="user-icon"></span>
                <span class="user-name font-small">Megumi</span>
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>
                <div class="icons-on-pub flex-col gap-1 align-center">
                    {{-- <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus"> --}}
                    <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus">
                    {{-- <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big"> --}}
                    <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big">
                </div>  
                <textarea disabled="true" id="" class="txta-def pl-medium">aa</textarea>
            </div>
        </div>

        <div id="content-wrapper">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
            <div class="txta-wrapper">
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>
                <div class="icons-on-pub flex-col gap-1 align-center">
                    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus">
                    {{-- <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus"> --}}
                    <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big">
                    {{-- <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big"> --}}
                </div>  
                <textarea disabled="true" id="" class="txta-def"></textarea>
            </div>
        </div>

        <div id="content-wrapper">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
            <div class="txta-wrapper">
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>
                <div class="icons-on-pub flex-col gap-1 align-center">
                    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus">
                    {{-- <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus"> --}}
                    <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big">
                    {{-- <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big"> --}}
                </div>  
                <textarea disabled="true" id="" class="txta-def"></textarea>
            </div>
        </div>

        <div id="content-wrapper">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
            <div class="txta-wrapper">
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>
                <div class="icons-on-pub flex-col gap-1 align-center">
                    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus">
                    {{-- <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus"> --}}
                    <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big">
                    {{-- <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big"> --}}
                </div>  
                <textarea disabled="true" id="" class="txta-def"></textarea>
            </div>
        </div>
    </section>
        <a href="#" class="reset-def color-main block ta-center width-small m-auto">Show more</a>
</x-app-layout>


{{-- TODO 
-ajust the place of dates 
-make the side bar
--}}