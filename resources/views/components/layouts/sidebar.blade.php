@props(['pageTitle' => ""])

<div id="sidebar" class="sidebar flex-col align-center gap-1 pt-small">
    <div class="inline-flex align-center gap-1  mtb-small">

        <x-sidebar-icon />

        <p class="pr-small">{{ $pageTitle }}</p>
    </div>
    <x-navbar-items :$pageTitle />
</div>