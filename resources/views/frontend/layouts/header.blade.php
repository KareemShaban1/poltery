<!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
            <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">

                <li class="{{ request()->routeIs('home') ? 'menu-active' : '' }}"><a href="{{ route('home') }}">
                        {{ trans('frontend.home') }}</a>
                </li>
                <li class="{{ request()->routeIs('about-us') ? 'menu-active' : '' }}"><a
                        href="{{ route('about-us') }}">About
                        Us</a></li>
                <li class="{{ request()->routeIs('facilities') ? 'menu-active' : '' }}"><a
                        href="{{ route('facilities') }}">Facilities</a></li>
                <li class="{{ request()->routeIs('products') ? 'menu-active' : '' }}"><a
                        href="{{ route('products') }}">Our
                        Products</a></li>
                <li class="{{ request()->routeIs('recipes') ? 'menu-active' : '' }}"><a
                        href="{{ route('recipes') }}">Recipes</a></li>
                <li class="{{ request()->routeIs('contact-us') ? 'menu-active' : '' }}"><a
                        href="{{ route('contact-us') }}">Contact Us</a></li>
                @if (App::getLocale() == 'en')
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                            <img src="{{ URL::asset('backend/flags/EG.png') }}" alt="">
                            <span class="mx-2 "> عربى </span>

                        </a>
                    </li>
                @else
                    <li><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                            <span class="mx-2">English</span> <img src="{{ URL::asset('backend/flags/US.png') }}"
                                alt="">
                        </a>
                    </li>
                @endif
                {{-- <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li> --}}
            </ul>

            <ul class="nav-menu" style="display: flex; gap:20px">

                {{-- <li>عربى</li>
                <li>english</li> --}}
            </ul>
        </nav><!-- #nav-menu-container -->


    </div>
</header><!-- #header -->
