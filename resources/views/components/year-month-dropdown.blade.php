@php
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
@endphp

<select name="year" class="search-input">
    <option value="">Year</option>
    @for ($i = now()->year; $i > 2019; $i--)
        <option value="{{ $i }}" {{ request('year') == $i ? "selected" : ""}}>
            {{ $i }}
        </option>
    @endfor
</select>
<select name="month" class="search-input">
    <option value="">Month</option>
    @foreach ($months as $month)
        <option value="{{ $loop->iteration }}" {{ request('month') == $loop->iteration ? "selected" : ""}}>
            {{ $month }}
        </option>
    @endforeach
</select>