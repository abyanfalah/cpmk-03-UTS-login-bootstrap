@include('layouts.header')

<!-- @auth
    <div style="margin-top: 10rem;"></div>
@endauth -->

<div class="m-10">
    @if (session('success'))
        <div class="alert theme-success mb-5" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @yield('content')
</div>
@include('layouts.footer')