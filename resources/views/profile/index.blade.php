<x-app-layout mainPadding="pt-medium" gap="gap-2" pageTitle="Profile" taCenter="ta-center">
<div>
    <p class="bold">Your Profile Information</p>
    <form action="#" method="GET" class="flex-col gap-small align-center mtb-small">
        @csrf
        <div class="form-group">
            <label for="name" class="font-small pl-smaller">Name</label>
            <input type="name" id="name" name="name" placeholder="Name" class="input-def" value="{{ $user->name }}">
        </div>        
        <div class="form-group">
            <label for="email" class="font-small pl-smaller">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" class="input-def" value="{{ $user->email }}">
        </div>        
        <div class="form-group">
            <label for="phone" class="font-small pl-smaller">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Phone" class="input-def" value="{{ $user->phone }}">
        </div>
        <div class="form-group">
            <div>
                <label for="user-icon" class="font-small ml-minus-small">User Icon</label>
                <label for="user-name" class="font-small pl-smaller">User Name</label>
            </div>
            <div class="relative">
                <div class="flex">
                    <button name="user-icon" id="user-icon" class="user-icon-input" type="button">
                        <img src="{{ $user->userIcon->image_path }}" alt="User Icon" class="user-icon-profile">
                    </button>
                    <input type="text" name="user-name" id="user-name" placeholder="User Name" class="input-def name-input" value="{{ $user->user_name }}" >
                </div>
                <div class="icon-list hidden">
                    <img src="#" alt="" class="icon-li">
                    <img src="#" alt="" class="icon-li">
                    <img src="#" alt="" class="icon-li">
                    <img src="#" alt="" class="icon-li">
                    <img src="#" alt="" class="icon-li">
                </div>
            </div>
        </div>
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
        <div class="form-group">
            <label for="current-password" class="font-small pl-smaller">Current Password</label>
            <input type="password" id="current-password" name="current_password" placeholder="Current password" class="input-def">
        </div>
        <div class="form-group">
            <label for="new-password" class="font-small pl-smaller">New Password</label>
            <input type="password" name="new_password" placeholder="New password" class="input-def">
        </div>
        <div class="form-group">
            <label for="new-password-confirmation" class="font-small pl-smaller">Repeat Password</label>
            <input type="password" name="new_password_confirmation" placeholder="Repeat password" class="input-def">
        </div>
        <div class="flex gap-1 justify-end">
            <button class="btn">Update password</button>
        </div>
    </form>
</div>
    
</x-app-layout>