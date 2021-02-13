<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('seo')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/main.css">

    @yield('page-styles')
</head>

<body>
    <div class="wrapper">
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
        <main class="content">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__row">
                    <div class="footer__text">
                        <p>
                            Every resource belongs to official owners <span>Grüne Schule</span> and <span>School
                                §204</span>
                        </p>
                        <p>
                            @deastortion 2021
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/assets/js/script.js"></script>
</body>

</html>
