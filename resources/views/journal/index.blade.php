@php
$months = ['January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'];
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
@endphp

<x-app-layout mainPadding="pt-small" pageTitle="Your Journals">
    <div id="search-bar" class="search-wrapper mtb-small">
    <form action="#" class="search-group bg-white">   
        @csrf
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
        <select name="day-of-week" id="" class="search-input mr-smaller">
            <option value="">Day of the week</option>
            @foreach ($days as $day)
            <option value="{{ $day }}">{{ $day }}</option>            
            @endforeach
        </select>
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
                    {{-- <span class="radio-mark"></span> --}}
                    Public
                </label>
            </div>
            <div class="txta-wrapper">
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>               
                <textarea name="" id="" class="txta-def"></textarea>
                <div class="btn-wrapper flex">
                    <button class="btn small-btn border-lt">Edit</button>
                    <button class="btn small-btn">Add</button>
                    <button class="btn small-btn">Update</button>
                    <button class="btn small-btn border-rb border-r-unset">Delete</button>
                </div>
            </div>
        </div>
        <div id="content-wrapper">
            <div class="flex align-center">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                <span class="font-small mr-smaller">10</span>
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                <span class="font-small">10</span>
            </div>
            <div class="txta-wrapper">
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>               
                <textarea name="" id="" class="txta-def"></textarea>
                <div class="btn-wrapper flex">
                    <button class="btn small-btn border-lt">Edit</button>
                    <button class="btn small-btn">Add</button>
                    <button class="btn small-btn">Update</button>
                    <button class="btn small-btn border-rb border-r-unset">Delete</button>
                </div>
            </div>
        </div>
        <div id="content-wrapper">
            <div class="flex align-center">
            <span class="ml-small mr-small font-small">1/24/2025 Mon 12:00</span> 
                <img src="{{ asset('img/heart-with-colors.png') }}" alt="" class="heart">
                <span class="font-small mr-smaller">10</span>
                <img src="{{ asset('img/hug-blue-with-line.png')}}" alt="" class="hug">
                <span class="font-small">10</span>
            </div>
            <div class="txta-wrapper">
                <div class="tag-wrapper">
                    <div class="tag-t"></div>
                    <div class="tag-l"></div>
                    <div class="tag-r"></div>
                </div>               
                <textarea name="" id="" class="txta-def"></textarea>
                <div class="btn-wrapper flex">
                    <button class="btn small-btn border-lt">Edit</button>
                    <button class="btn small-btn">Add</button>
                    <button class="btn small-btn">Update</button>
                    <button class="btn small-btn border-rb border-r-unset">Delete</button>
                </div>
            </div>
        </div>
    </section>
        <a href="#" class="reset-def color-main block ta-center width-small m-auto">Show more</a>
</x-app-layout>