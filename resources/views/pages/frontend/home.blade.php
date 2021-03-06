@extends('layouts.frontend.index')

@section('seo')
    <title>Grüne Schule · Taschkent, Usbekistan</title>
    <meta hid="description" name="description" content="This is an eco-friendly project called Grüne Schule">
@endsection

@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/home/home.css">
@endsection

@section('content')
    <section class="hero" id="hero">
        <div class="hero__wrapper">
            <div class="container">
                <div class="hero__row">
                    <div class="hero__body">
                        <h1 style="display: none;">Grüne Schule</h1>
                        <h2 class="hero__title">
                            @lang('hero.title')
                        </h2>
                        <p class="hero__text">
                            @lang('hero.description')
                        </p>
                        <a href="#who" class="hero__button">
                            {{-- Okay, let's go --}}
                            @lang('hero.button')
                        </a>
                    </div>
                    <div class="hero__image">
                        <img src="/assets/img/nature-on-sceen.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1612534826">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <section class="who" id="who">
        <div class="who__wrapper">
            <div class="container">
                <div class="who__row">
                    <div class="who__image">
                        <img src="/assets/img/hangout.svg" alt="">
                    </div>
                    <div class="who__body">
                        <h2 class="who__title title">
                            @lang('who.title')
                        </h2>
                        <p class="who__text">
                            @lang('who.description')
                        </p>
                        <a href="#last-events" class="who__button">
                            @lang('who.button')
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="achvs">
            <div class="mini-container">
                <h2 class="achvs__title title">
                    @lang('achvs.title')
                </h2>
                <div class="achvs__row">
                    <div class="achv">
                        <div class="achv__image">
                            <img loading=lazy src="/assets/img/icons/plant.svg" alt="">
                        </div>
                        <div class="achv__body">
                            <div class="achv__number">
                                100+
                            </div>
                            <div class="achv__item">
                                trees
                            </div>
                        </div>
                    </div>

                    <div class="achv">
                        <div class="achv__image">
                            <img loading=lazy src="/assets/img/icons/bottle.svg" alt="">
                        </div>
                        <div class="achv__body">
                            <div class="achv__number">
                                100+
                            </div>
                            <div class="achv__item">
                                trees
                            </div>
                        </div>
                    </div>

                    <div class="achv">
                        <div class="achv__image">
                            <img loading=lazy src="/assets/img/icons/refresh.svg" alt="">
                        </div>
                        <div class="achv__body">
                            <div class="achv__number">
                                100+
                            </div>
                            <div class="achv__item">
                                trees
                            </div>
                        </div>
                    </div>

                    <div class="achv">
                        <div class="achv__image">
                            <img src="/assets/img/icons/bottle.svg" alt="">
                        </div>
                        <div class="achv__body">
                            <div class="achv__number">
                                100+
                            </div>
                            <div class="achv__item">
                                trees
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="custom-shape-divider-bottom-1612534827">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="last-events" id="last-events">
        <div class="last-events__wrapper">
            <div class="container">
                <h2 class="last-events__title title">
                    @lang('latest-events.title')
                </h2>
                <p class="last-events__subtitle">
                    @lang('latest-events.subtitle')
                </p>
                <div class="last-events__row">
                    @if (count($events))
                        @foreach ($events as $event)
                            <div class="last-event__wrapper">
                                <div class="last-event">
                                    <div class="last-event__image">
                                        <img src="{{ $event->image }}" alt="">
                                    </div>
                                    <div class="last-event__body">
                                        <div class="last-event__title">
                                            {{ $event->title }}
                                        </div>
                                        <div class="last-event__details">
                                            <div class="last-event__date">
                                                <img src="/assets/img/icons/clock.svg" alt="clock">
                                                {{ $event->created_at->format('Y-m-d') }}
                                            </div>
                                            <span>|</span>
                                            <div class="last-event__author">
                                                <img src="/assets/img/icons/user.svg" alt="user">
                                                Admin
                                            </div>
                                            <div class="last-event__comments">
                                                <img src="/assets/img/icons/speech-bubble.svg" alt="comments">
                                                <span>{{ $event->comments->count() }}</span>
                                            </div>
                                        </div>
                                        <p class="last-event__description">
                                            {{ $event->description }}
                                        </p>
                                        <a href="/events/{{ $event->id }}" class="last-event__button">
                                            @lang('latest-events.button')
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
