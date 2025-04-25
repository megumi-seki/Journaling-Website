@php
$months = ['January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'];
@endphp

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