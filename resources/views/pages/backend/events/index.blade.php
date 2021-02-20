@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/content/events/index.css') }}">
@endsection

@section('content')
    @if (count($events))
        @php
            $selected = [];
        @endphp
        <div class="panel">
            <div class="search__wrapper">
                <span class="las la-search search__icon"></span>
                <input type="search" class="search__input" placeholder="Type here to search ...">
            </div>
            <div class="info">
                Selected: {{ count($selected) }}
            </div>
            {{ $events->links() }}
            <div></div>
            <div class="actions">
                <a href="/dashboard/events/create" class="action las la-plus-square"></a>
                <a href="#" class="action las la-trash-alt"></a>
            </div>
        </div>
        <div class="cards">
            @foreach ($events as $event)
                <div class="card">
                    <div class="card__header">
                        {{-- <img src="/assets/img/eco-fest.jpg" alt=""> --}}
                        <img src="{{ $event->image }}" alt="">
                    </div>
                    <div class="card__body">
                        <h3 class="card__title">
                            {{ $event->title }}
                        </h3>
                        <p class="card__description">
                            {{ $event->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
