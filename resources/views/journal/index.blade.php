@php
$months = ['January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'];
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
@endphp

<x-app-layout mainPadding="p-all-small">
    <div class="flex align-center">
    <form action="#" class="form-group bg-white">   
        @csrf
        <select name="year" id="" class="ddown mr-small">
            <option value="">Year</option>
            @for ($i = now()->year; $i > 2019; $i--)
                return <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <select name="month" id="" class="ddown mr-small">
            <option value="">Month</option>
            @foreach ($months as $month)
                <option value="{{ $month }}">{{ $month }}</option>
            @endforeach
        </select>
        <select name="day-of-week" id="" class="ddown mr-small">
            <option value="">Day of the week</option>
            @foreach ($days as $day)
            <option value="{{ $day }}">{{ $day }}</option>            
            @endforeach
        </select>
        <select name="tag" id="" class="ddown mr-small">
            <option value="">Tagged or not</option>
            <option value="">Tagged</option>
            <option value="">Not tagged</option>
        </select>
        <button class="btn search-btn mr-small bg-white">Reset</button>
        <button class="btn search-btn">Search</button>
    </form>
    <form action="#" class="ml-auto" class="ddown">   
        @csrf
        <select class="ddown">
            <option value="">Order</option>
            <option value="">Latest to the top</option>
            <option value="">Ordest to the top</option>
        </select>
    </form>
    </div>  
        <div class="flex-col gap-1">
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
            <textarea name="" id="" class="txta-def"></textarea>
        </div>
        <a href="#" class="reset-def color-main block ta-center">Show more</a>
</x-app-layout>