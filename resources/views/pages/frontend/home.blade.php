@extends('layouts.frontend.index')

@section('seo')
    <title>Grüne Schule · Tasckent, Usbekistan</title>
    <meta hid="description" name="description" content="This is a eco-friendly project called Grüne Schule">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/content/hero.css">
    <link rel="stylesheet" href="/assets/css/frontend/content/who.css">
    <link rel="stylesheet" href="/assets/css/frontend/content/last-events.css">
@endsection
@section('content')
    <section class="hero" id="hero">
        <div class="hero__wrapper">
            <div class="container">
                <div class="hero__row">
                    <div class="hero__body">
                        <h1 style="display: none;">Grüne Schule</h1>
                        <h2 class="hero__title">
                            Hey, this is a project called <span>Grune Schule</span>
                        </h2>
                        <p class="hero__text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione numquam odit
                            provident at velit repudiandae quos neque commodi sunt dolore deleniti aut eligendi
                            nostrum natus ad, laboriosam suscipit dolorum unde.
                        </p>
                        <a href="#who" class="hero__button">
                            Okay, let's go
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
                            Who are we?
                        </h2>
                        <p class="who__text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim iure, tempore natus
                            ipsa
                            hic vitae quos sapiente? Temporibus quo eligendi vel. Quidem cumque nihil qui quis
                            odio
                            magnam accusamus voluptates!
                            Illum, soluta sint. Consectetur, illum aliquam. Voluptatem alias natus totam magnam
                            itaque tempora odit nemo velit odio, inventore voluptas autem est? Porro magnam,
                            itaque
                            nobis numquam alias doloribus tempora ullam!
                        </p>
                        <a href="#last-events" class="who__button">
                            Next
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="achvs">
            <div class="mini-container">
                <h2 class="achvs__title title">
                    Our achievements
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
                    Latest events
                </h2>
                <p class="last-events__subtitle">
                    Wanna get to know us better? Check out our events
                </p>
                <div class="last-events__row">
                    @if (count($events))
                        @foreach ($events as $event)
                            <div class="last-event__wrapper">
                                <div class="last-event">
                                    <div class="last-event__image">
                                        <img src="/assets/img/eco-fest.jpg" alt="">
                                    </div>
                                    <div class="last-event__body">
                                        <div class="last-event__title">
                                            {{$event->title}}
                                        </div>
                                        <div class="last-event__details">
                                            <div class="last-event__date">
                                                <img src="/assets/img/icons/clock.svg" alt="clock">
                                                {{$event->created_at->format('Y-m-d')}}
                                            </div>
                                            <span>|</span>
                                            <div class="last-event__author">
                                                <img src="/assets/img/icons/user.svg" alt="user">
                                                Admin
                                            </div>
                                            <div class="last-event__comments">
                                                <img src="/assets/img/icons/speech-bubble.svg" alt="comments">
                                                0
                                            </div>
                                        </div>
                                        <p class="last-event__description">
                                            {{$event->description}}
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptate?
                                        </p>
                                        <a href="#" class="last-event__button">
                                            Take a look!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="last-event__wrapper">
                        <div class="last-event">
                            <div class="last-event__image">
                                <img src="/assets/img/eco-holiday.jpg" alt="">
                            </div>
                            <div class="last-event__body">
                                <div class="last-event__title">
                                    Happy eco-holidays!
                                </div>
                                <div class="last-event__details">
                                    <div class="last-event__date">
                                        <img src="/assets/img/icons/clock.svg" alt="clock">
                                        Aug 19, 2020
                                    </div>
                                    <span>|</span>
                                    <div class="last-event__author">
                                        <img src="/assets/img/icons/user.svg" alt="user">
                                        Admin
                                    </div>
                                    <div class="last-event__comments">
                                        <img src="/assets/img/icons/speech-bubble.svg" alt="comments">
                                        0
                                    </div>
                                </div>
                                <p class="last-event__description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae reprehenderit
                                    animi soluta voluptatem quaerat quod, quibusdam dolor? Eligendi, excepturi
                                    animi! Officiis expedita veniam incidunt deserunt aliquam repellat quis
                                    deleniti sunt!
                                </p>
                                <a href="#" class="last-event__button">
                                    Take a look!
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="last-event__wrapper">
                        <div class="last-event">
                            <div class="last-event__image">
                                <img src="/assets/img/eco-rock.jpg" alt="">
                            </div>
                            <div class="last-event__body">
                                <div class="last-event__title">
                                    Eco-rock-n-roll!
                                </div>
                                <div class="last-event__details">
                                    <div class="last-event__date">
                                        <img src="/assets/img/icons/clock.svg" alt="clock">
                                        Aug 19, 2020
                                    </div>
                                    <span>|</span>
                                    <div class="last-event__author">
                                        <img src="/assets/img/icons/user.svg" alt="user">
                                        Admin
                                    </div>
                                    <div class="last-event__comments">
                                        <img src="/assets/img/icons/speech-bubble.svg" alt="comments">
                                        0
                                    </div>
                                </div>
                                <p class="last-event__description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptate?
                                </p>
                                <a href="#" class="last-event__button">
                                    Take a look!
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
