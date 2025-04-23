<x-app-layout mainPadding="p-all-large" gap="gap-2" pageTitle="Profile">
<div>
    <p class="bold">Your Profile Information</p>
    <form action="#" method="GET" class="flex-col align-center gap-small mtb-small">
        @csrf
        <input type="text" name="name" placeholder="Name" class="input-def">
        <input type="email" name="email" placeholder="Email" class="input-def">
        <input type="text" name="phone" placeholder="Phone" class="input-def">
        <div class="width-max flex gap-1 justify-end">
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
        <div class="width-max flex gap-1 justify-end">
            <button class="btn">Update password</button>
        </div>
    </form>
</div>
    
</x-app-layout>