<aside class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="/" class="nav__logo">
                <span class="lab la-pagelines nav__logo-icon"></span>
                <span class="nav__logo-name">Gruene Schule</span>
            </a>

            <div class="nav__list">
                <a href="/dashboard" class="nav__link {{ request()->is('dashboard') ? 'active' : '' }}">
                    <span class="las la-igloo nav__icon"></span>
                    <span class="nav__name ">@lang('dashboard.sidebar.dashboard')</span>
                </a>

                <a href="/dashboard/events" class="nav__link {{ request()->is('dashboard/events') ? 'active' : '' }}">
                    <span class='las la-clipboard-list nav__icon'></span>
                    <span class="nav__name">@lang('dashboard.sidebar.events')</span>
                </a>

                <a href="/dashboard/users" class="nav__link {{ request()->is('dashboard/users') ? 'active' : '' }}">
                    <span class="las la-users nav__icon"></span>
                    <span class="nav__name">@lang('dashboard.sidebar.users')</span>
                </a>
                <a href="/dashboard/comments"
                    class="nav__link {{ request()->is('dashboard/comments') ? 'active' : '' }}">
                    <span class="las las la-comment nav__icon"></span>
                    <span class="nav__name">@lang('dashboard.sidebar.comments')</span>
                </a>
            </div>

        </div>

        <a href="#" class="nav__link" onclick="document.getElementById('logout').submit();">
            <span class="las la-door-open nav__icon"></span>
            <span class="nav__name">
                @lang('dashboard.sidebar.logout')
            </span>
        </a>

        <form action="{{ route('logout') }}" id="logout" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>
</aside>
