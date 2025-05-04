<x-app-layout mainPadding="pt-medium" pageTitle="Settings" taCenter="ta-center">
    <p class="bold">Settings</p>
    <form action="{{ route('settings.update') }}" method="POST" class="flex-col gap-small align-center mtb-small">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="public-mode" class="font-small pl-smaller">Public Mode</label>
            <select name="public_mode" id="public-mode" class="input-def">
                <option value="0" {{ !$settings->public_mode ? "selected": "" }}>Off</option>
                <option value="1" {{ $settings->public_mode ? "selected": "" }}>On</option>
            </select> 
        </div>
        <div class="form-group">
            <label for="screen-mode" class="font-small pl-smaller">Screen Mode</label>
            <select name="screen_mode" id="screen-mode" class="input-def">
                <option value="0" {{ !$settings->screen_mode ? "selected": "" }}>Light mode</option>
                <option value="1" {{ $settings->screen_mode ? "selected": "" }}>Dark mode</option>
            </select>
        </div>
        <div class="form-group">
            <label for="colors" class="font-small pl-smaller">Colors</label>
            <select name="color_unit_id" id="colors" class="input-def">
            @for ($i = 0; $i < 8; $i++)
                <option value="{{ $i + 1 }}" {{ $i + 1 == $settings->color_unit_id ? "selected" :""}}>Colors {{ $i + 1 }}</option>
                {{-- <option value="{{ $i + 1 }}" >Colors {{ $i + 1 }}</option> --}}
            @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="font-style" class="font-small pl-smaller">Font Style</label>
            <select name="font_style_id" id="font-style" class="input-def">
            @for ($i = 0; $i < 8; $i++)
                <option value="{{ $i + 1 }}" {{ $i + 1 == $settings->font_style_id ? "selected" :""}}>Font Style {{ $i + 1 }}</option>
                {{-- <option value="{{ $i + 1 }}" >Font Style {{ $i + 1 }}</option> --}}
            @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="font-size" class="font-small pl-smaller">Font Size</label>
            <select name="font_size_id" id="font-size" class="input-def">
            @for ($i = 0; $i < 6; $i++)
                <option value="{{ $i + 1 }}" {{ $i + 1 == $settings->font_size_id ? "selected" :""}}>Font Size {{ $i + 1 }}</option>
                {{-- <option value="{{ $i + 1 }}" >Font Size {{ $i + 1 }}</option> --}}
            @endfor
            </select>
        </div>
        <div class="width-max gap-1 flex justify-center" class="input-def">
            <button type="reset" class="btn s-btn bg-white color-main">Reset</button>
            <button type="submit" class="btn s-btn">Save</button>
        </div>
    </form>       
</x-app-layout>