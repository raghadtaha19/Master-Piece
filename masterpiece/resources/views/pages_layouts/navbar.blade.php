<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent sticky-top">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{ asset('images/icon-deal.png') }}" alt="Icon"
                    style="width: 50px; height: 50px;">
            </div>
            <h1 class="m-0 text-primary">Landi</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('home') }}"
                    class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('filterlands') }}"
                    class="nav-item nav-link {{ request()->routeIs('filterlands') ? 'active' : '' }}">All Lands</a>
                <a href="{{ route('sellform') }}"
                    class="nav-item nav-link {{ request()->routeIs('sellform') ? 'active' : '' }}">Sell Form</a>
                <a href="{{ route('services') }}"
                    class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>

            @if (Auth::check())
                <a href="{{ route('profile.edit') }}" class="btn btn-link">
                    <i class="fa fa-user-circle fa-2x"></i>
                </a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary px-3 d-lg-flex">Logout</button>
                </form>
            @else
                <a href="{{ route('register') }}" class="btn btn-primary px-3 d-lg-flex"
                    style="margin-right: 4px;">Register</a>
                <a href="{{ route('login') }}" class="btn btn-primary px-3 d-lg-flex">Login</a>
            @endif
        </div>
    </nav>
</div>
<!-- Navbar End -->
