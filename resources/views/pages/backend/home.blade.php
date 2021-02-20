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
                        {{ $usersCount + 102 }}
                    </h2>
                    <small class="card__name">
                        Users
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
                        Events
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
                        32
                    </h2>
                    <small class="card__name">
                        Users
                    </small>
                </div>
                <div class="card__icon">
                    <span class="las la-users"></span>
                </div>
            </div>
        @endif
        @if ($usersCount)
            <div class="card">
                <div class="card__info">
                    <h2 class="card__number">
                        {{ $usersCount + 12 }}
                    </h2>
                    <small class="card__name">
                        Staff
                    </small>
                </div>
                <div class="card__icon">
                    <span class="las la-user-friends"></span>
                </div>
            </div>
        @endif



    </div>
    {{-- <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date of creation</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Matman</td>
                <td>Crimefighter Sorta</td>
                <td>Chief Sandwich Eater</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tick</td>
                <td>Crimefighter Sorta</td>
                <td>Crimefighter Sorta</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tick</td>
                <td>Crimefighter Sorta</td>
                <td>Crimefighter Sorta</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Tick</td>
                <td>Crimefighter Sorta</td>
                <td>Crimefighter Sorta</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Tick</td>
                <td>Crimefighter Sorta</td>
                <td>Crimefighter Sorta</td>
            </tr>
        </tbody>
    </table> --}}

    <div class="recent">
        <div class="card-events">
            <div class="card__header">
                <h4 class="card__title">Latest events</h4>
                <a href="/dashboard/events" class="card__link">View all</a>
            </div>
            <div class="card__body">
                @if (count($events))
                    @foreach ($events as $event)
                        <div class="event">
                            <div class="event__image">
                                <img src="/assets/img/eco-fest.jpg" alt="">
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

                    @endforeach
                @endif
            </div>
        </div>
        <div class="card-events">
            <div class="card__header">
                <h4 class="card__title">New users</h4>
                <a href="/dashboard/events" class="card__link">View all</a>
            </div>
            <div class="card__body">

                @if (count($users))
                    @foreach ($users as $user)
                        <div class="user">
                            <div class="user__image">
                                <img src="/assets/img/profile.jpg" alt="">
                            </div>
                            <div class="user__body">
                                <div class="user__name">
                                    {{$user->name}}
                                </div>
                                <div class="event__description">
                                    <p>Email: {{$user->email}}</p>
                                    <p>Registered: {{$user->created_at->format('Y/m/d H:i:s')}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
