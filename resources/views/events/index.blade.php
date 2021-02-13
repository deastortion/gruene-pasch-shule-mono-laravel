@extends('layouts.default')
@section('seo')
    <title>Events · Grüne Schule</title>
    <meta hid="description" name="description" content="Here is the list of our latest events">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/content/events.css">
@endsection

@section('content')
    <div class="settings">
        <div class="settings__wrapper">
            <div class="container">
                <h1 class="events__title title">
                    Events
                </h1>
                <form class="settings__form">
                    <input type="search" name="settings__search" id="settings__search" class="settings__search"
                        placeholder="Type something ... ">
                </form>
                <div class="settings__tags">
                    <div class="tag">
                        Festival
                    </div>
                    <div class="tag">
                        Show
                    </div>
                    <div class="tag">
                        Concert
                    </div>
                    <div class="tag">
                        Picnic
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1612904660">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div class="events" id="events">
        <div class="events__wrapper">
            <div class="container">
                <div class="events__row">
                    @if (count($events))
                        @foreach ($events as $event)
                            <div class="event">
                                <div class="event__card">
                                    <div class="event__image">
                                        <img src="../assets/img/eco-fest.jpg" alt="">
                                    </div>
                                    <div class="event__body">
                                        <div class="event__title">
                                            {{ $event->title }}
                                        </div>
                                        <div class="event__description">
                                            {{ $event->description }}
                                        </div>
                                        <a href="/events/{{ $event->id }}" class="event__button">
                                            Reade more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $events->fragment('events')->links() }}
            </div>
        </div>
    </div>
@endsection
