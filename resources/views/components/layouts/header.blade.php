@props(['pageTitle' => ""])

<div class="header">
    <img class="icon" src="{{ asset('img/icon-new.png') }}" alt="icon">
    <x-sidebar-icon />
    <div class="nav-bar">
        <p class="mr-small page-title">{{ $pageTitle }}</p>

        <div class="nav-bar">
            <x-navbar-items :$pageTitle />
        </div>   
    </div>
</div>