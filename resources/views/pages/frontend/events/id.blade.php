@extends('layouts.frontend.index')

@section('seo')
    <title>{{ $event->title }} · Grüne Schule</title>
    <meta hid="description" name="description" content="{{ $event->description }}">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/content/event.css">
@endsection

@section('content')
    <div class="event">
        <div class="container">
            <div class="card">
                <div class="card__header">
                    <img src="{{ $event->image }}" alt="">
                </div>
                <div class="card__body">
                    <h1 class="card__title">
                        {{ $event->title }}
                    </h1>
                    <h4 class="card__description">
                        {{ $event->description }}
                    </h4>
                    <div class="card__content">
                        {!! $event->content !!}
                    </div>
                </div>
                <div class="card__footer">
                    <div class="card__created-at">
                        {{ $event->created_at->format('d M Y') }}
                    </div>
                    <div class="card__author">
                        @admin
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
