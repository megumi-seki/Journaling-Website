<x-app-layout mainPadding="pt-medium" gap="gap-2" pageTitle="Profile" taCenter="ta-center">
<div>
    <p class="bold">Your Profile Information</p>
    <form action="#" method="GET" class="flex-col align-center gap-small mtb-small">
        @csrf
        <div class="relative">
        <div class="flex">
            <button name="user-icon" id="" class="user-icon-input">
                User Icon
            </button>
            <input type="text" name="name" placeholder="Name" class="input-def name-input">
        </div>
        <div class="icon-list hidden">
            <img src="#" alt="" class="icon-li">
            <img src="#" alt="" class="icon-li">
            <img src="#" alt="" class="icon-li">
            <img src="#" alt="" class="icon-li">
            <img src="#" alt="" class="icon-li">
        </div>
        </div>
        <input type="email" name="email" placeholder="Email" class="input-def">
        <input type="text" name="phone" placeholder="Phone" class="input-def">
        <div class="flex gap-1 justify-end">
            <button class="btn">Reset</button>
            <button class="btn">Update</button>
        </div>
    </form>
</div>

<div>
    <p class="bold">Update Password</p>
    <form action="#" method="GET" class="flex-col align-center gap-small mtb-small">
        @csrf
        <input type="passwprd" name="current_password" placeholder="Current password" class="input-def">
        <input type="password" name="new_password" placeholder="New password" class="input-def">
        <input type="password" name="new_password_confirmation" placeholder="Repeat password" class="input-def">
        <div class="flex gap-1 justify-end">
            <button class="btn">Update password</button>
        </div>
    </form>
</div>
    
</x-app-layout>