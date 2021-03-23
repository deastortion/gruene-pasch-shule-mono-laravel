@extends('layouts.backend.index')


@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/events/show.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card__body">
            <div class="card__image">
                <img src="{{ $event->image }}" alt="">
            </div>
            <h1 class="card__title">
                {{ $event->title }}
            </h1>
            <h2 class="card__description">
                - {{ $event->description }} -
            </h2>
            <div class="card__content">
                {!! $event->content !!}
            </div>
        </div>
    </div>
@endsection
