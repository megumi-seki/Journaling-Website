@props(['pageTitle' => ""])

<div class="header">
    <a href="#">
        <img class="icon" src="{{ asset('img/icon-new.png') }}" alt="icon">
    </a>
    <x-sidebar-icon :$pageTitle />

    <div class="nav-bar">
        <p class="mr-small page-title">{{ $pageTitle }}</p>

        <div class="nav-bar">
            <x-navbar-items :$pageTitle />
        </div>   
    </div>
</div>