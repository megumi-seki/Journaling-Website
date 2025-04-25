@props(['pageTitle' => ""])

<div class="header">
    <a href="#">
        <img class="icon" src="{{ asset('img/icon-new.png') }}" alt="icon">
    </a>

    <div id="sidebar-icon" class="sidebar-icon-hide">
        <div class="inline-flex align-center gap-1">
            <p class="mr-small page-title">{{ $pageTitle }}</p>

            <x-sidebar-icon />
            
        </div>
    </div>


    <div class="nav-bar">
        <p class="mr-small page-title">{{ $pageTitle }}</p>

        <div class="nav-bar">
            <x-navbar-items :$pageTitle />
        </div>   
    </div>
</div>