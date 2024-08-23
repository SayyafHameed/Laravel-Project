<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="@yield('home-active')">
                    <a class="nav-link" href="{{ route('theme.home') }}">Home</a>
                </li>
                <li class="@yield('shop-active')"><a class="nav-link" href="{{ route('theme.shop') }}">Shop</a></li>
                <li class="@yield('about-active')"><a class="nav-link" href="{{ route('theme.about') }}">About us</a></li>
                <li class="@yield('services-active')"><a class="nav-link" href="{{ route('theme.services') }}">Services</a></li>
                <li class="@yield('blog-active')"><a class="nav-link" href="{{ route('theme.blog') }}">Blog</a></li>
                <li class="@yield('contact-active')"><a class="nav-link" href="{{ route('theme.contact') }}">Contact us</a>
                </li>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <li class="@yield('dashboard-active')"><a href="{{ url('/dashboard') }}" class="nav-link">
                                    Dashboard
                                </a>
                            </li>
                        @else
                            <li class="@yield('login-active')"><a href="{{ route('login') }}" class="nav-link">
                                    Log in
                                </a>
                            </li>

                            @if (Route::has('register'))
                                <li class="@yield('register-active')"><a href="{{ route('register') }}" class="nav-link">
                                        Register
                                    </a>
                                </li>
                            @endif
                        @endauth
                    </nav>
                @endif
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="@yield('user-active')"><a class="nav-link" href="#"><img
                            src="{{ asset('assets') }}/images/user.svg"></a></li>
                <li class="@yield('cart-active')"><a class="nav-link" href="{{ route('theme.cart') }}"><img
                            src="{{ asset('assets') }}/images/cart.svg"></a></li>
            </ul>
        </div>
    </div>

</nav>
<!-- End Header/Navigation -->
