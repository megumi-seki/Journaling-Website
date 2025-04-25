<x-app-layout mainPadding="pt-small" pageTitle="Everyone's Journals">

    <section id="filter-weapper" class="hidden">
        <form action="#" class=" filter-group bg-white">   
            @csrf
            <x-hashtag-dropdown />
            <x-keyword-dropdown />
            <x-year-month-dropdown />
            <x-tag-dropdown />
            <x-reset-search-button />
        </form>
    </section>

    <section id="search-section" class="search-wrapper mtb-small">
        <x-filter-button />
        <form action="#" class="search-group bg-white">   
            @csrf
            <x-hashtag-dropdown />
            <x-year-month-dropdown />
            <x-tag-dropdown />
            <x-keyword-dropdown />
            <x-reset-search-button />
        </form>
    <x-order-dropdown-form />

</section>  

<section id="contents-section" class="flex-col gap-1 pb-small ">

    <div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-tag />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <x-heart-big />
                <x-hug-big />           
            </div>
            <textarea disabled="true" id="" class="txta-def txta-pub">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
        </div>
    </div>
    <div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-tag />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <x-heart-big />
                <x-hug-big />           
            </div>
            <textarea disabled="true" id="" class="txta-def txta-pub">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
        </div>
    </div>
    <div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-tag />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <x-heart-big />
                <x-hug-big />           
            </div>
            <textarea disabled="true" id="" class="txta-def txta-pub">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
        </div>
    </div>
    <div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-tag />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <x-heart-big />
                <x-hug-big />           
            </div>
            <textarea disabled="true" id="" class="txta-def txta-pub">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
        </div>
    </div>
    <div id="content-wrapper" class="">
        <span class="ml-small font-small">1/24/2025 Mon 12:00</span> 
        <div class="txta-wrapper">
            <span class="user-icon"></span>
            <span class="user-name font-small">Megumi</span>
            <x-public-tag />
            <div class="icons-on-pub flex-col gap-1 align-center">
                <x-heart-big />
                <x-hug-big />           
            </div>
            <textarea disabled="true" id="" class="txta-def txta-pub">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia blanditiis incidunt ipsum architecto. Labore officiis, accusantium asperiores deleniti tempora sequi aliquid distinctio architecto, numquam laborum quidem ipsa natus cumque accusamus?</textarea>
        </div>
    </div>

    






</section>
        <a href="#" class="reset-def color-main block ta-center width-small m-auto">Show more</a>
</x-app-layout>


