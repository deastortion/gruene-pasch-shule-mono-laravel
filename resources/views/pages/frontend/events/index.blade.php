@extends('layouts.frontend.index')
@section('seo')
    <title>Events · Grüne Schule</title>
    <meta hid="description" name="description" content="Here is the list of our latest events">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/events/index.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
@endsection

@section('content')
    <div class="hero">
        <div class="hero__wrapper">
            <div class="container">
                <div class="hero__body">
                    <h1 class="hero__title">
                        @lang('events.title')
                    </h1>
                    <p class="hero__subtitle">
                        @lang('events.subtitle')
                    </p>
                    <form class="hero__search" method="GET">
                        <input type="text" name="search" id="search" autocomplete="off" required class="hero__input"
                            placeholder="@lang('events.search.placeholder')"
                            value="{{ app('request')->input('search') }}">
                        <button type="submit" class="hero__submit las la-search"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1615670328">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="events">

        <div class="events__wrapper">
            <div class="container">
                @if (count($events) > 0)
                    <div class="events__body">

                        @foreach ($events as $event)

                            <div class="event__wrapper">
                                <div class="event">

                                    <div class="event__image">
                                        <img src="{{ $event->image }}" alt="">
                                    </div>
                                    <div class="event__body">
                                        <h4 class="event__title">
                                            {{ $event->title }}
                                        </h4>
                                        <div class="event__details">
                                            <div class="event__created-at">
                                                <span class="las la-clock"></span>
                                                <span>{{ $event->created_at->format('Y-m-d') }}</span>
                                            </div>
                                            <div class="event__comments">
                                                <span class="las la-comments"></span>
                                                <span>{{ $event->comments->count() }}</span>
                                            </div>
                                        </div>
                                        <p class="event__description">
                                            {{ $event->description }}
                                        </p>
                                        <a href="{{ '/events/' . $event->id }}"
                                            class="event__btn">@lang('events.button')</a>
                                    </div>

                                </div>
                            </div>

                        @endforeach

                    </div>

                    {{ $events->withQueryString()->onEachSide(1)->links() }}

                @else
                    <h2 class="events__message">
                        @lang('events.no-events')
                    </h2>
                @endif

            </div>
        </div>
    </div>
@endsection
