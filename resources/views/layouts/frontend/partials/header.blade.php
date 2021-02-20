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
                            Home
                        </a>
                    </li>
                    <li class="header__link {{ request()->is('events') ? 'active' : '' }}">
                        <a href="/events">
                            Events
                        </a>
                    </li>
                    @auth
                        @if (Auth::user()->is_admin)
                            <li class="header__link {{ request()->is('dashboard') ? 'active' : '' }}">
                                <a href="/dashboard">
                                    Dashboard
                                </a>
                            </li>

                        @endif

                        <li class="header__link">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                            @csrf
                        </form>
                    @else
                        <li class="header__link">
                            <a href="/login">
                                Login
                            </a>
                        </li>
                        <li class="header__link">
                            <a href="/register">
                                Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</header>
