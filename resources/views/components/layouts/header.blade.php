@props(['pageTitle' => ""])

<div class="header">
    <img class="icon" src="{{ asset('img/icon-new.png') }}" alt="icon">
    <div class="flex gap-1 justify-end align-center">
        <p class="mr-small">{{ $pageTitle }}</p>

        @switch($pageTitle)
                @case("Your New Journal")
                    <button class="btn nav-btn bc-main c-white">Your Journals</button>
                    <button class="btn nav-btn bc-main c-white">Everyone's Journals</button>
                    <button class="btn nav-btn">Profile</button>
                    <button class="btn nav-btn">Settings</button> 
                    <button class="btn nav-btn">Logout</button>
                @break
                @case("Your Journals")
                    <button class="btn nav-btn bc-main c-white">Everyone's Journals</button>
                    <button class="btn nav-btn">Profile</button>
                    <button class="btn nav-btn">Settings</button> 
                    <button class="btn nav-btn">Logout</button>
                    @break
                @case("Profile")
                    <button class="btn nav-btn bc-main c-white">Your Journals</button>
                    <button class="btn nav-btn bc-main c-white">Everyone's Journals</button>
                    <button class="btn nav-btn">Settings</button> 
                    <button class="btn nav-btn">Logout</button>
                @break
                @case("Settings")
                    <button class="btn nav-btn bc-main c-white">Your Journals</button>
                    <button class="btn nav-btn bc-main c-white">Everyone's Journals</button>
                    <button class="btn nav-btn">Profile</button>
                    <button class="btn nav-btn">Logout</button> 
                @break
                @case("Everyone's Journals")
                    <button class="btn nav-btn bc-main c-white">Your Journals</button>
                    <button class="btn nav-btn">Profile</button>
                    <button class="btn nav-btn">Settings</button> 
                    <button class="btn nav-btn">Logout</button> 
                @break
                @default
                    <button class="btn nav-btn mr-small">Signup</button>
                    <button class="btn nav-btn">Login</button>
        @endswitch
                    
    </div>
</div>