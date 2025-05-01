<select name="tag" id="" class="search-input">
    <option value="">Tagged or not</option>
    <option value="1" {{ request("tag") == "1" ? "selected" : ""}}>
        Tagged
    </option>
    <option value="0" {{ request("tag") == "0" ? "selected" : ""}}>
        Not tagged
    </option>
</select>