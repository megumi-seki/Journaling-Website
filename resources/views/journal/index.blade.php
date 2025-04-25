{{-- @php
// $months = ['January', 'February', 'March', 'April', 'May', 'June',
//     'July', 'August', 'September', 'October', 'November', 'December'];
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
@endphp --}}

<x-app-layout mainPadding="pt-small" pageTitle="Your Journals">




    <section id="filter-weapper" class="hidden">
        <form action="#" class=" filter-group bg-white">   
            @csrf
            <x-hashtag-dropdown />
            <x-keyword-dropdown />

            {{-- <input type="text" name="hashtag" placeholder="#Hashtag" class="search-input pl-smaller">
            <input type="text" name="keyword" placeholder="Free key words" class="search-input pl-smaller"> --}}
            <x-year-month-dropdown />
            {{-- <select name="year" id="" class="search-input">
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
            </select> --}}
            <x-day-of-week-dropdown />
            {{-- <select name="day-of-week" id="" class="search-input mr-smaller">
                <option value="">Day of the week</option>
                @foreach ($days as $day)
                <option value="{{ $day }}">{{ $day }}</option>            
                @endforeach
            </select> --}}
            <x-tag-dropdown />
            {{-- <select name="tag" id="" class="search-input">
                <option value="">Tagged or not</option>
                <option value="">Tagged</option>
                <option value="">Not tagged</option>
            </select> --}}
            <x-reset-search-button />
            {{-- <button class="btn search-btn bg-white">Reset</button>
            <button class="btn search-btn">Search</button> --}}
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
        {{-- <select name="year" id="" class="search-input">
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
        </select> --}}
        {{-- <select name="day-of-week" id="" class="search-input">
            <option value="">Day of the week</option>
            @foreach ($days as $day)
            <option value="{{ $day }}">{{ $day }}</option>            
            @endforeach
        </select> --}}
        {{-- <select name="tag" id="" class="search-input mr-small">
            <option value="">Tagged or not</option>
            <option value="">Tagged</option>
            <option value="">Not tagged</option>
        </select> --}}
        {{-- <input type="text" name="hashtag" placeholder="#Hashtag" class="search-input pl-smaller">
        <input type="text" name="keyword" placeholder="Free key words" class="search-input pl-smaller">
        <button class="btn search-btn bg-white">Reset</button>
        <button class="btn search-btn">Search</button> --}}
    </form>

    <x-order-dropdown-form />
</section>  




    <section id="contents-section" class="flex-col gap-2 pb-small">
        <div id="content-wrapper">
            <div class="flex align-center">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                <span class="font-small mr-smaller">10</span>
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                <span class="font-small mr-smaller">10</span>
                <label for="public" class="font-small custom-radio">
                    <input type="radio" name="public" class="ver-al">
                    Public
                </label>
            </div>
            <div class="txta-wrapper">
                <x-not-tagged-icon />           
                <textarea name="" id="" class="txta-def"></textarea>
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
                <label for="public" class="font-small custom-radio">
                    <input type="radio" name="public" class="ver-al">
                    Public
                </label>
            </div>
            <div class="txta-wrapper">
                <x-not-tagged-icon />           
                <textarea name="" id="" class="txta-def"></textarea>
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
                <label for="public" class="font-small custom-radio">
                    <input type="radio" name="public" class="ver-al">
                    Public
                </label>
            </div>
            <div class="txta-wrapper">
                <x-tagged-icon />           
                <textarea name="" id="" class="txta-def"></textarea>
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
                <label for="public" class="font-small custom-radio">
                    <input type="radio" name="public" class="ver-al">
                    Public
                </label>
            </div>
            <div class="txta-wrapper">
                <x-tagged-icon />           
                <textarea name="" id="" class="txta-def"></textarea>
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
                <label for="public" class="font-small custom-radio">
                    <input type="radio" name="public" class="ver-al">
                    Public
                </label>
            </div>
            <div class="txta-wrapper">
                <x-not-tagged-icon />           
                <textarea name="" id="" class="txta-def"></textarea>
                <x-edit-icon />
                <x-small-buttons />
            </div>
        </div>
    </section>
        <a href="#" class="reset-def color-main block ta-center width-small m-auto">Show more</a>
</x-app-layout>