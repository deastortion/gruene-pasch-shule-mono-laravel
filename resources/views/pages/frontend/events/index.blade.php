@extends('layouts.frontend.index')
@section('seo')
    <title>Events · Grüne Schule</title>
    <meta hid="description" name="description" content="Here is the list of our latest events">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/content/events.css">
    <link rel="stylesheet" href="/assets/css/frontend/content/hero.css">
    <link rel="stylesheet" href="/assets/css/frontend/content/search.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
@endsection

@section('content')
    <div class="hero">
        <div class="hero__wrapper">
            <div class="container">
                <div class="hero__row">
                    <div class="hero__image">
                        <img src="/assets/img/schedule.svg" alt="">
                    </div>
                    <div class="hero__body">
                        <h1 class="hero__title">
                            Events
                        </h1>
                        <p class="hero__text">
                            Here is the list of latest <span>events</span>! You'd better check every post here out. Good
                            luck! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, voluptates.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="events">
        <div class="search__card2">
            <form class="search__wrapper">
                <span class="search__icon las la-search"></span>
                <input class="search__input" type="search" name="search" id="search" placeholder="Search for events ...">
                <input class="search__submit" type="submit" value="Search">
            </form>
        </div>
        <div class="events__wrapper">
            <div class="container">
                @if (count($events) > 0)
                    {{$events->links()}}
                    <div class="events__body">

                        @foreach ($events as $event)
                            <div class="event">
                                <div class="event__image">
                                    <img src="{{ $event->image }}" alt="">
                                </div>
                                <div class="event__body">
                                    <h4 class="event__title">
                                        {{ $event->title }}
                                    </h4>
                                    <p class="event__description">
                                        {{ $event->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @else
                    <h2 class="events__message">
                        There is no events yet!
                    </h2>
                @endif

            </div>
        </div>
    </div>
@endsection
