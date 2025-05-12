@props(['pageTitle' => ""])

@switch($pageTitle)
@case("Your New Journal")
    <x-buttons.your-journals />
    <x-buttons.everyones-journals />
    <x-buttons.profile />
    <x-buttons.settings />
    <x-buttons.logout />
@break
@case("Your Journals")
    <x-buttons.everyones-journals />
    <x-buttons.profile />
    <x-buttons.settings />
    <x-buttons.logout />
    @break
@case("Everyone's Journals")
    <x-buttons.your-journals />
    <x-buttons.profile />
    <x-buttons.settings />
    <x-buttons.logout />
@break
@case("Profile")
    <x-buttons.your-journals />
    <x-buttons.everyones-journals />
    <x-buttons.settings />
    <x-buttons.logout />
@break
@case("Settings")
    <x-buttons.your-journals />
    <x-buttons.everyones-journals />
    <x-buttons.profile />
    <x-buttons.logout />
@break
@default
    <x-buttons.signup />
    <x-buttons.login />
@endswitch
