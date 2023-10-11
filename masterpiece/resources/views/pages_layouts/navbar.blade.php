<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent sticky-top">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4 ">
        <a href="" class="navbar-brand d-flex align-items-center text-center ">
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
                    class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>

                <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>

            </div>
            <a href="{{ route('signup') }}" class="btn btn-primary px-3 d-lg-flex">Sign UP</a>
            <a href="{{ route('login') }}" class="btn btn-primary px-3 d-lg-flex">Login</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->
