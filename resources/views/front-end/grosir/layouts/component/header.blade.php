<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="{{ asset('fruit/assets/img/headervelaris.png') }}">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'current-list-item' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ Request::is('about') ? 'current-list-item' : '' }}">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="{{ Request::is('news') ? 'current-list-item' : '' }}">
                                <a href="{{ route('news') }}">News</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'current-list-item' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li class="{{ Request::is('shop') ? 'current-list-item' : '' }}">
                                <a href="{{ route('shop') }}">Shop</a>
                                <ul class="sub-menu {{ Request::is('shop') || Request::is('checkout') || Request::is('cart') ? 'current-list-item' : '' }}">
                                    <li class="{{ Request::is('shop') ? 'current-list-item' : '' }}">
                                        <a href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li class="{{ Request::is('checkout') ? 'current-list-item' : '' }}">
                                        <a href="{{ route('checkout.index') }}">Check Out</a>
                                    </li>
                                    <li class="{{ Request::is('cart') ? 'current-list-item' : '' }}">
                                        <a href="{{ route('cart.index') }}">Cart</a>
                                    </li>
                                    @if (auth()->check() && auth()->user()->role_id == 3)
                                        <li class="{{ Request::is('') ? 'current-list-item' : '' }}">
                                            <a href="/logout">Logout</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                            <li>
                                @if (auth()->check() && auth()->user()->role_id == 2)
                                    <a href="/dashboard">Dashboard</a>
                                @elseif(auth()->check() && auth()->user()->role_id == 3)
                                    <form action="/logout" method="post" style="display: inline;">
                                        @csrf
                                        <button class="logout-button" type="submit">Logout</button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                @endif
                            </li>
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="{{ route('cart.index') }}">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a class="mobile-hide search-bar-icon" href="#">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
