<select name="heart" id="" class="search-input">
    <option value="">Sent heart or not</option>
    <option value="1" {{ request("heart") == "1" ? "selected" : ""}}>
        Sent heart
    </option>
    <option value="0" {{ request("heart") == "0" ? "selected" : ""}} >
        Not sent heart
    </option>
</select>

<select name="hug" id="" class="search-input">
    <option value="">Send hug or not</option>
    <option value="1" {{ request("hug") == "1" ? "selected" : ""}}>
        Sent hug
    </option>
    <option value="0" {{ request("hug")  == "0" ? "selected" : ""}}>
        Not sent hug
    </option>
</select>