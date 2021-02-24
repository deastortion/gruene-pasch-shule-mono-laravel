@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/content/stats.css') }}">
@endsection

@section('content')
    <div class="cards">
        @if ($usersCount)
            <div class="card">
                <div class="card__info">
                    <h2 class="card__number">
                        {{ $usersCount }}
                    </h2>
                    <small class="card__name">
                        @lang('dashboard.home.users')
                    </small>
                </div>
                <div class="card__icon">
                    <span class="las la-users"></span>
                </div>
            </div>
        @endif
        @if ($eventsCount)
            <div class="card">
                <div class="card__info">
                    <h2 class="card__number">
                        {{ $eventsCount }}
                    </h2>
                    <small class="card__name">
                        @lang('dashboard.home.events')
                    </small>
                </div>
                <div class="card__icon">
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
        @endif
        @if ($eventsCount)
            <div class="card">
                <div class="card__info">
                    <h2 class="card__number">
                        {{ $eventsCount }}
                    </h2>
                    <small class="card__name">
                        @lang('dashboard.home.events')
                    </small>
                </div>
                <div class="card__icon">
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
        @endif
        @if ($eventsCount)
            <div class="card">
                <div class="card__info">
                    <h2 class="card__number">
                        {{ $eventsCount }}
                    </h2>
                    <small class="card__name">
                        @lang('dashboard.home.events')
                    </small>
                </div>
                <div class="card__icon">
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
        @endif



    </div>

    <div class="recent">
        <div class="card-events">
            <div class="card__header">
                <h4 class="card__title">@lang('dashboard.home.latest-events')</h4>
                <a href="/dashboard/events" class="card__link">@lang('dashboard.home.view-all')</a>
            </div>
            <div class="card__body">
                @if (count($events))
                    @foreach ($events as $event)
                        <a href="/dashboard/events/{{ $event->id }}">
                            <div class="event">
                                <div class="event__image">
                                    {{-- <img src="/assets/img/eco-fest.jpg" alt=""> --}}
                                    <img src="{{ $event->image }}" alt="">
                                </div>
                                <div class="event__body">
                                    <div class="event__name">
                                        {{ $event->title }}
                                    </div>
                                    <div class="event__description">
                                        {{ $event->description }}
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </a>

                    @endforeach
                @endif
            </div>
        </div>
        <div class="card-events">
            <div class="card__header">
                <h4 class="card__title">@lang('dashboard.home.new-users')</h4>
                <a href="/dashboard/events" class="card__link">@lang('dashboard.home.view-all')</a>
            </div>
            <div class="card__body">

                @if (count($users))
                    @foreach ($users as $user)
                        <a href="/dashboard/users/{{ $user->id }}">
                            <div class="user">
                                <div class="user__image">
                                    <img src="/assets/img/profile.jpg" alt="">
                                </div>
                                <div class="user__body">
                                    <div class="user__name">
                                        {{ $user->name }}
                                    </div>
                                    <div class="event__description">
                                        <p>Email: {{ $user->email }}</p>
                                        <p>Registered: {{ $user->created_at->format('Y/m/d H:i:s') }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
