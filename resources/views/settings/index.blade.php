<x-app-layout mainPadding="pt-medium" pageTitle="Settings" taCenter="ta-center">
    <p class="bold">Settings</p>
        <form action="#" method="GET" class="flex-col gap-small align-center mtb-small">
        <form action="#" method="GET" class="mtb-small">
        
        <div class="form-group">
        <label for="public-mode" class="font-small pl-smaller">Public Mode</label>
        <select name="public-mode" id="public-mode" class="input-def">
            <option value="">Public Mode</option>
            <option value="">On</option>
            <option value="">Off</option>
        </select> 
        </div>
        <div class="form-group">
        <label for="screen-mode" class="font-small pl-smaller">Screen Mode</label>
        <select name="screen-mode" id="screen-mode" class="input-def">
            <option value="">Screen Mode</option>
            <option value="">Light mode</option>
            <option value="">Dark mode</option>
        </select>
        </div>
        <div class="form-group">
        <label for="colors" class="font-small pl-smaller">Colors</label>
        <select name="colors" id="colors" class="input-def">
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
        </select>
        </div>
        <div class="form-group">
        <label for="font-style" class="font-small pl-smaller">Font Style</label>
        <select name="font-style" id="font-style" class="input-def">
            <option value="">Font Style</option>
            <option value="">Font Style</option>
            <option value="">Font Style</option>
            <option value="">Font Style</option>
            <option value="">Font Style</option>
        </select>
        </div>
        <div class="form-group">
        <label for="font-size" class="font-small pl-smaller">Font Size</label>
        <select name="font-size" id="font-size" class="input-def">
            <option value="">Font Size</option>
            <option value="">Font Size</option>
            <option value="">Font Size</option>
            <option value="">Font Size</option>
            <option value="">Font Size</option>
        </select>
        </div>
        <div class="width-max gap-1 flex justify-center" class="input-def">
            <button class="btn s-btn">Reset</button>
            <button class="btn s-btn">Update</button>
            <button class="btn s-btn">Default</button>
        </div>
    </form>       
</x-app-layout>