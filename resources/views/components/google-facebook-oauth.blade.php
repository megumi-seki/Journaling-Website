<div class="flex gap-2 justify-center">
    <a href="{{ route('login.oauth', "google") }}" class="btn auth-btn inline-flex justify-center align-center reset-def color-black font-small">
        <img src="{{ asset('/img/google3.png') }}" alt="google"  class="google-img mr-smaller">
        Google
    </a>
    <a href="{{ route('login.oauth', "facebook") }}" class="btn auth-btn inline-flex justify-center align-center reset-def color-black font-small">
        <img src="{{ asset('img/facebook.png') }}" alt="facebook" class="facebook-img mr-smaller">
        Facebook
    </a>
</div>