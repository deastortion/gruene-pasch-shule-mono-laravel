<header class="header">
    <div class="container">
        <div class="header__row">
            <div class="header__logo">
                <a href="/">
                    Grüne Schule
                </a>
            </div>
            <div class="header__burger">
                <span>
                </span>
            </div>
            <nav class="header__nav">
                <ul class="header__links">
                    <li class="header__link {{ request()->is('/') ? 'active' : '' }}">
                        <a href="/">
                            @lang('header.navigation_links.home')
                        </a>
                    </li>
                    <li class="header__link {{ request()->is('events') ? 'active' : '' }}">
                        <a href="/events">
                            @lang('header.navigation_links.events')

                        </a>
                    </li>
                    @auth
                        @if (Auth::user()->is_admin)
                            <li class="header__link {{ request()->is('dashboard') ? 'active' : '' }}">
                                <a href="/dashboard">
                                    @lang('header.navigation_links.dashboard')

                                </a>
                            </li>
                        @endif
                        <li class="header__link {{ request()->is('profile') ? 'active' : '' }}">
                            <a href="/profile">
                                @lang('header.navigation_links.profile')
                            </a>
                        </li>
                        <li class="header__link">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('header.navigation_links.logout')

                            </a>
                        </li>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                            @csrf
                        </form>
                    @else
                        <li class="header__link">
                            <a href="/login">
                                @lang('header.navigation_links.login')

                            </a>
                        </li>
                        <li class="header__link">
                            <a href="/register">
                                @lang('header.navigation_links.register')

                            </a>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</header>
