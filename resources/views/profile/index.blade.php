<x-app-layout mainPadding="pt-medium" gap="gap-2" pageTitle="Profile" taCenter="ta-center" :$user>
<div>
    <p class="bold">Your Profile Information</p>
    <form action="{{ route('profile.update') }}" method="POST" class="flex-col gap-small align-center mtb-small">
        @csrf
        @method("PUT")
        <div class="form-group @error("name") has-error @enderror">
            <label for="name" class="font-small pl-smaller">Name</label>
            <input type="name" id="name" name="name" placeholder="Name" class="input-def" value="{{ $user->name }}">
            <div class="error-message">
                {{ $errors->first("name") }}
            </div>
        </div>        
        <div class="form-group @error("email") has-error @enderror">
            <label for="email" class="font-small pl-smaller">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" class="input-def" value="{{ $user->email }}">
            <div class="error-message">
                {{ $errors->first("email") }}
            </div>
        </div>        
        <div class="form-group @error("phone") has-error @enderror">
            <label for="phone" class="font-small pl-smaller">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Phone" class="input-def" value="{{ $user->phone }}">
            <div class="error-message">
                {{ $errors->first("phone") }}
            </div>
        </div>
        <div class="form-group">
            <div>
                <label for="user-icon" class="font-small ml-minus-small">User Icon</label>
                <label for="user-name" class="font-small pl-smaller">User Name</label>
            </div>
            <div class="relative width-max">
                <div class="flex  width-max">
                    <button name="user-icon" id="user-icon" class="user-icon-input-btn" type="button">
                        <img src="{{ $user->userIcon->image_path }}" alt="User Icon" class="user-icon-profile">
                    </button>
                    <input type="text" name="user_name" id="user-name" placeholder="User Name" class="input-def   width-max" value="{{ $user->user_name }}" >
                </div>
                <div class="icon-list hidden">
                    <input type="hidden" name="user_icon_id" id="hidden-input" value="{{ $user->userIcon->id }}">
                    @foreach ($user_icons as $user_icon)
                        <button type="button" class="btn-def-unset icon-li-btn" data-id="{{ $user_icon->id }}" data-src="{{ $user_icon->image_path }}">
                            <img src="{{ $user_icon->image_path }}" alt="User Icon {{ $user_icon->id }}" class="icon-li">
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="width-max flex gap-1 justify-end">
            <button type="reset" class="btn bg-white color-main">Reset</button>
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
</div>

<div>
    <p class="bold">Update Password</p>
    <form action="{{ route('profile.updatePassword') }}" method="POST" class="flex-col align-center gap-small mtb-small">
        @csrf
        @method("PUT")
        <div class="form-group @error("current_password") has-error @enderror">
            <label for="current-password" class="font-small pl-smaller">Current Password</label>
            <input type="password" id="current-password" name="current_password" placeholder="Current password" class="input-def">
            <div class="error-message">
                {{ $errors->first("current_password") }}
            </div>
        </div>
        <div class="form-group @error("new_password") has-error @enderror">
            <label for="new-password" class="font-small pl-smaller">New Password</label>
            <input type="password" name="new_password" placeholder="New password" class="input-def">
            <div class="error-message">
                {{ $errors->first("new_password") }}
            </div>
        </div>
        <div class="form-group">
            <label for="new-password-confirmation" class="font-small pl-smaller">Repeat Password</label>
            <input type="password" name="new_password_confirmation" placeholder="Repeat password" class="input-def">
        </div>
        <div class="width-max flex gap-1 justify-end">
            <button class="btn">Update password</button>
        </div>
    </form>
</div>
    
</x-app-layout>

