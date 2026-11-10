@auth
    <form method="post" action="{{ route('logout') }}" style="d-inline-block">
        @csrf
        <button type="submit" class="btn-solid theme-danger">Logout</button>
    </form>
@endauth
