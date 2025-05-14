<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn nav-btn">
        Logout
    </button> 
</form>
