@props(['pageTitle' => ""])

<div class="sidebar flex-col align-center gap-1 pt-small">
    <div class="inline-flex align-center gap-1 pb-small">
        <x-sidebar-icon />
        <p class="">{{ $pageTitle }}</p>
    </div>
    <x-navbar-items :$pageTitle />
</div>