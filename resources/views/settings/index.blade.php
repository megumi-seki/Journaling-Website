@php
    $fontSizes = ["Extra Small", "Small", "Default", "Large", "Extra Large"]
@endphp

<x-app-layout mainMargin="mtb-medium" pageTitle="Settings" :$user>
    <p class="bold ta-center">Settings</p>
    <form action="{{ route('settings.update') }}" method="POST" class="flex-col gap-small align-center mtb-small">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="public-mode" class="font-small pl-smaller">Public Mode <span class="font-smaller">(This enables your journal visibility, but does not automatically publish contents)</span></label>
            <select name="public_mode" id="public-mode" class="input-def">
                <option value="0" {{ !$settings->public_mode ? "selected": "" }}>Off</option>
                <option value="1" {{ $settings->public_mode ? "selected": "" }}>On (email verification & valid phone number required)</option>
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
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="font-size" class="font-small pl-smaller">Font Size</label>
            <select name="font_size" id="font-size" class="input-def">
                @foreach ($fontSizes as $fontSize)
                    <option value="{{ $loop->iteration }}" {{ $loop->iteration == $settings->font_size ? "selected" :""}}>
                        {{ $fontSize }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="font-style" class="font-small pl-smaller">Font Style</label>
            {{-- TODO js to change font style on select before submitting --}}
            <select name="font_style_id" id="font-style" class="input-def font-{{ $settings->fontStyle->id }}">
                @foreach ($fontStyles as $fontStyle)
                    <option value="{{ $loop->iteration }}" {{ $loop->iteration == $settings->font_style_id ? "selected" :""}}
                        class="font-{{ $loop->iteration }}">
                        {{ $fontStyle->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="width-max gap-1 flex justify-end" class="input-def">
            <button type="reset" class="btn medium-btn">Reset</button>
            <button type="submit" class="btn medium-btn bg-main">Save</button>
        </div>
    </form>       
</x-app-layout>