<x-app-layout mainMargin="mtb-small" :$pageTitle >
    <div class="flex-col gap-2">
        <div class="top-header ta-center bg-white">
            <h1 class="cutive-mono">Dear Journal...</h1>
            <p>~a peaceful journaling place for you🌿~</p>
        </div>
        <div class="first-top-image">
            <img src="{{ asset('img/your-journal-page.png')}}" alt="Your Journal Page" class="top-img">
            <div class="img-description-1">
                <p class="underline mtb-smaller"><b>Your Journal</b></p>
                <p>This is a website where you can write journal entries 
                    and document your journey toward deeper self-understanding.</p>
                <p>You can keep your journal completely private.</p>
            </div>
        </div>
        <div class="second-top-image">
            <div class="img-description-2">
                <p class="underline mtb-smaller"><b>Everyone's Journals</b></p>
                <p>If you choose to, you can share some of your entries in the public section.</p>
                <p>While staying true to the core purpose of journaling, 
                    this site gently lets you feel the warmth of others through likes and hugs,
                    without follower counts or comments that might distract from self-reflection.</p>
            </div>
            <img src="{{ asset('img/everyones-page.png')}}" alt="Your Journal Page" class="top-img mt-minus">
        </div>
        <div class="top-pagecustom mtb-small">
            <p class="underline"><b>Page Customization</b></p>
            <p class="img-description-3">You can customize your journal's theme color, font style, and layout to match your personal style.</p>
            <div class="pagecustom-imgs">
                <img src="{{ asset(path: 'img/nightmode-page-new.png')}}" alt="Custom Theme Color Example" class="top-img">
                <img src="{{ asset('img/winered-page-new.png')}}" alt="Custom Theme Color Example" class="top-img">
                <img src="{{ asset('img/yellow-page-new.png')}}" alt="Custom Theme Color Example" class="top-img">
                <img src="{{ asset('img/brown-page-new.png')}}" alt="Custom Theme Color Example" class="top-img">
            </div>
        </div>
        <div class="mtb-small top-header ta-center bg-white">
            <p><b>Are you interested? Let's get started!</b></p>
            <div class="flex gap-2 justify-center mtb-small">
               <x-buttons.signup /><x-buttons.login />
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <footer class="mtb-small">
        <p><b>credits</b></p>
        <div class="credit-links">
        <p><a href="https://www.flaticon.com/free-icons/embrace" title="embrace icons" class="font-small">Embrace icons created by narak0rn - Flaticon</a></p>
        <p><a href="https://www.flaticon.com/free-icons/hug" title="hug icons" class="font-small">Hug icons created by narak0rn - Flaticon</a></p>
        <p><a href="https://www.flaticon.com/free-icons/embrace" title="embrace icons" class="font-small">Embrace icons created by narak0rn - Flaticon</a></p>
        <p><a href="https://www.flaticon.com/free-icons/heart" title="heart icons" class="font-small">Heart icons created by Freepik - Flaticon</a></p>
        <p><a href="https://www.flaticon.com/free-icons/heart" title="heart icons" class="font-small">Heart icons created by Pixel perfect - Flaticon</a></p>
        <p><a href="https://www.flaticon.com/free-icons/heart" title="heart icons" class="font-small">Heart icons created by Kroffle - Flaticon</a></p> 
        </div>
    </footer>
</x-app-layout>
