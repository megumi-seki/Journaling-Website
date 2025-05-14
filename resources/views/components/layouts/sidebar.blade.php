@props(['pageTitle' => null])

<div id="sidebar" class="sidebar flex-col align-center gap-1">
    <div class="inline-flex align-center gap-1 mt-2 ">
        <x-sidebar-icon />
        <p>{{ $pageTitle }}</p>
    </div>
    <x-navbar-items :$pageTitle />
</div>