@php
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
@endphp

<select name="day-of-week" id="" class="search-input">
    <option value="">Day of the week</option>
    @foreach ($days as $day)
    <option value="{{ $day }}">{{ $day }}</option>            
    @endforeach
</select>