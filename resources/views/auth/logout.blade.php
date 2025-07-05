<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn nav-link bg-transparent border-0" style="cursor:pointer;">
        Logout
    </button>
</form>
