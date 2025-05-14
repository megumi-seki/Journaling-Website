@php
    $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
@endphp

<select name="day-of-week" class="search-input">
    <option value="">Day of the week</option>
    @foreach ($days as $day)
        <option value="{{ $loop->index }}" {{ request('day-of-week') === (string)$loop->index ? "selected" : "" }}>
            {{ $day }}
        </option>            
    @endforeach
</select>