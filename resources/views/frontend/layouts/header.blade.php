<!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo">

            <a href="#intro" class="scrollto">
                <span class="visually-hidden">link</span>
                <div class="intro-img">

                </div>
                <div class="intro-img-2">

                </div>
            </a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">

                <li class="{{ request()->routeIs('home') ? 'menu-active' : '' }}"><a href="{{ route('home') }}">
                        {{ trans('frontend.home') }}</a>
                </li>
                <li class="{{ request()->routeIs('about-us') ? 'menu-active' : '' }}"><a href="{{ route('about-us') }}">
                        {{ trans('frontend.about_us') }}
                    </a></li>
                <li class="{{ request()->routeIs('facilities') ? 'menu-active' : '' }}"><a
                        href="{{ route('facilities') }}">{{ trans('frontend.facilities') }}</a></li>
                <li class="{{ request()->routeIs('products') ? 'menu-active' : '' }}"><a
                        href="{{ route('products') }}">{{ trans('frontend.products') }}</a></li>
                <li class="{{ request()->routeIs('recipes') ? 'menu-active' : '' }}"><a
                        href="{{ route('recipes') }}">{{ trans('frontend.recipes') }}</a></li>
                <li class="{{ request()->routeIs('contact-us') ? 'menu-active' : '' }}"><a
                        href="{{ route('contact-us') }}">{{ trans('frontend.contact_us') }}</a></li>
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
