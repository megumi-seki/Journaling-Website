{{-- @php
$months = ['January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'];
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
@endphp --}}

<x-app-layout mainPadding="pt-small" pageTitle="Everyone's Journals">

    <section id="filter-weapper" class="hidden">
    <form action="#" class=" filter-group bg-white">   
        @csrf
        <x-hashtag-dropdown />
        <x-keyword-dropdown />
        <x-year-month-dropdown />
        <x-tag-dropdown />
        <x-reset-search-button />
        {{-- <input type="text" name="hashtag" placeholder="#Hashtag" class="search-input pl-smaller">
        <input type="text" name="keyword" placeholder="Free key words" class="search-input pl-smaller">
        <select name="year" id="" class="search-input">
            <option value="">Year</option>
            @for ($i = now()->year; $i > 2019; $i--)
                return <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <select name="month" id="" class="search-input">
            <option value="">Month</option>
            @foreach ($months as $month)
                <option value="{{ $month }}">{{ $month }}</option>
            @endforeach
        </select>
        <select name="tag" id="" class="search-input">
            <option value="">Tagged or not</option>
            <option value="">Tagged</option>
            <option value="">Not tagged</option>
        </select>
        <button class="btn search-btn bg-white">Reset</button>
        <button class="btn search-btn">Search</button> --}}
    </form>
</section>

    <section id="search-section" class="search-wrapper mtb-small">
        <x-filter-button />
    <form action="#" class="search-group bg-white">   
        @csrf
        <x-hashtag-dropdown />
        <x-year-month-dropdown />
        <x-tag-dropdown />
        <x-keyword-dropdown />
        <x-reset-search-button />
        
        {{-- <input type="text" name="hashtag" placeholder="#Hashtag" class="search-input pl-small width-medium mr-smaller">
        <select name="year" id="" class="search-input mr-smaller">
            <option value="">Year</option>
            @for ($i = now()->year; $i > 2019; $i--)
                return <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <select name="month" id="" class="search-input mr-smaller">
            <option value="">Month</option>
            @foreach ($months as $month)
                <option value="{{ $month }}">{{ $month }}</option>
            @endforeach
        </select>
        <select name="tag" id="" class="search-input mr-small">
            <option value="">Tagged or not</option>
            <option value="">Tagged</option>
            <option value="">Not tagged</option>
        </select>
        <input type="text" name="keyword" placeholder="Free key words" class="search-input pl-small width-medium mr-smaller">

        <button class="btn search-btn mr-smaller bg-white grid-second-last">Reset</button>
        <button class="btn search-btn grid-last">Search</button> --}}
    </form>
    <x-order-dropdown-form />
    {{-- <form action="#" class="ml-auto" class="search-input">   
        @csrf
        <select class="search-input">
            <option value="">Order</option>
            <option value="">Latest to the top</option>
            <option value="">Ordest to the top</option>
        </select>
    </form> --}}
</section>  
<section id="contents-section" class="flex-col gap-1 pb-small ">
    <div id="content-wrapper" class="">
            <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
            <div class="txta-wrapper">
                <span class="user-icon"></span>
                <span class="user-name font-small">Megumi</span>
                <x-public-tagged-icon />
                <div class="icons-on-pub flex-col gap-1 align-center">
                    {{-- <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus"> --}}
                    <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus">
                    {{-- <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big"> --}}
                    <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big">
                </div>  
                <textarea disabled="true" id="" class="txta-def">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
            </div>
    </div>
    <div id="content-wrapper" class="">
            <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
            <div class="txta-wrapper">
                <span class="user-icon"></span>
                <span class="user-name font-small">Megumi</span>
                <x-public-not-tagged-icon />
                <div class="icons-on-pub flex-col gap-1 align-center">
                    <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus">
                    {{-- <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus"> --}}
                    <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big">
                    {{-- <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big"> --}}
                </div>  
                <textarea disabled="true" id="" class="txta-def pl-medium">aa</textarea>
            </div>
    </div>
    <div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-tagged-icon />
            <div class="icons-on-pub flex-col gap-1 align-center">
                {{-- <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus"> --}}
                <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus">
                {{-- <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big"> --}}
                <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big">
            </div>  
            <textarea disabled="true" id="" class="txta-def">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
        </div>
</div>
<div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-not-tagged-icon />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus">
                {{-- <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus"> --}}
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big">
                {{-- <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big"> --}}
            </div>  
            <textarea disabled="true" id="" class="txta-def pl-medium">aa</textarea>
        </div>
</div>
<div id="content-wrapper" class="">
    <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
    <div class="txta-wrapper">
        <span class="user-icon"></span>
        <span class="user-name font-small">Megumi</span>
        <x-public-tagged-icon />
        <div class="icons-on-pub flex-col gap-1 align-center">
            {{-- <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus"> --}}
            <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus">
            {{-- <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big"> --}}
            <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big">
        </div>  
        <textarea disabled="true" id="" class="txta-def">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
    </div>
</div>
<div id="content-wrapper" class="">
    <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
    <div class="txta-wrapper">
        <span class="user-icon"></span>
        <span class="user-name font-small">Megumi</span>
        <x-public-not-tagged-icon />
        <div class="icons-on-pub flex-col gap-1 align-center">
            <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart-big ml-minus">
            {{-- <img src="{{ asset('img/heart-transparent.png') }}" alt="" class="heart-t-big ml-minus"> --}}
            <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug-big">
            {{-- <img src="{{ asset('img/hug-transparent.png')}}" alt="" class="hug-t-big"> --}}
        </div>  
        <textarea disabled="true" id="" class="txta-def pl-medium">aa</textarea>
    </div>
</div>

</section>
        <a href="#" class="reset-def color-main block ta-center width-small m-auto">Show more</a>
</x-app-layout>


