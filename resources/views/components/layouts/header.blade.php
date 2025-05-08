@props(['pageTitle' => "", "user" => null])

<div class="header">
    <x-buttons.app-icon :$user />

    <div id="sidebar-icon" class="sidebar-icon-hide">
        <div class="inline-flex align-center">
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