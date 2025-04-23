<x-app-layout mainPadding="p-all-large" pageTitle="Settings">
    <p class="bold">Settings</p>
    <form action="#" method="GET" class="flex-col gap-small mtb-small"> 
        <select name="mode" id="" class="input-def">
            <option value="">Light/Dark Mode</option>
            <option value="">Light mode</option>
            <option value="">Dark mode</option>
        </select>
        <select name="colors" id="" class="input-def">
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
            <option value="">Colors</option>
        </select>
        <select name="font-style" id="" class="input-def">
            <option value="">Font Style</option>
            <option value="">Font Style</option>
            <option value="">Font Style</option>
            <option value="">Font Style</option>
            <option value="">Font Style</option>
        </select>
        <select name="font-size" id="" class="input-def">
            <option value="">Font Size</option>
            <option value="">Font Size</option>
            <option value="">Font Size</option>
            <option value="">Font Size</option>
            <option value="">Font Size</option>
        </select>
        <div class="width-max flex gap-1 justify-end" class="input-def">
            <button class="btn">Reset</button>
            <button class="btn">Update</button>
            <button class="btn">Default</button>
        </div>
    </form>       
</x-app-layout>