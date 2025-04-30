<x-app-layout mainPadding="pt-medium" pageTitle="Settings" taCenter="ta-center">
    <p class="bold">Settings</p>
        <form action="#" method="GET" class="flex-col gap-small align-center mtb-small">
        <form action="#" method="GET" class="mtb-small">
        <div class="form-group">
        <label for="public-mode" class="font-small pl-smaller">Public Mode</label>
        <select name="public-mode" id="public-mode" class="input-def">
            <option value="">Public Mode</option>
            <option value="0" {{ !$settings->public_mode ? "selected": "" }}>Off</option>
            <option value="1" {{ $settings->public_mode ? "selected": "" }}>On</option>
        </select> 
        </div>
        <div class="form-group">
        <label for="screen-mode" class="font-small pl-smaller">Screen Mode</label>
        <select name="screen-mode" id="screen-mode" class="input-def">
            <option value="">Screen Mode</option>
            <option value="0" {{ !$settings->screen_mode ? "selected": "" }}>Light mode</option>
            <option value="1" {{ $settings->screen_mode ? "selected": "" }}>Dark mode</option>
        </select>
        </div>
        <div class="form-group">
        <label for="colors" class="font-small pl-smaller">Colors</label>
        <select name="colors" id="colors" class="input-def">
            @for ($i = 0; $i < 10; $i++)
                <option value="{{ $i }}" {{ $i == $settings->color_units_id ? "selected" :""}}>Colors {{$i}}</option>
            @endfor
        </select>
        </div>
        <div class="form-group">
        <label for="font-style" class="font-small pl-smaller">Font Style</label>
        <select name="font-style" id="font-style" class="input-def">
            @for ($i = 0; $i < 8; $i++)
                <option value="{{ $i }}" {{ $i == $settings->font_style_id ? "selected" :""}}>Font Style {{$i}}</option>
            @endfor
        </select>
        </div>
        <div class="form-group">
        <label for="font-size" class="font-small pl-smaller">Font Size</label>
        <select name="font-size" id="font-size" class="input-def">
            @for ($i = 0; $i < 6; $i++)
                <option value="{{ $i }}" {{ $i == $settings->font_size_id ? "selected" :""}}>Font Size {{$i}}</option>
            @endfor
        </select>
        </div>
        <div class="width-max gap-1 flex justify-center" class="input-def">
            <button class="btn s-btn">Reset</button>
            <button class="btn s-btn">Update</button>
            <button class="btn s-btn">Default</button>
        </div>
    </form>       
</x-app-layout>