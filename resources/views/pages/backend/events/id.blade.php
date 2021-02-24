@extends('layouts.backend.index')


@section('unique-styles')
    <style>
        .card {
            box-shadow: var(--shadow);
            background: white;
            overflow: hidden;
            border-radius: 5px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .card__title {
            text-align: center;
        }

        .card__description {
            text-align: center;
            padding: 0 10rem;
            margin: 0 auto;
            margin-bottom: .5rem;
        }

        .card__body {
            padding: 2rem;
            color: rgb(90, 103, 129) !important;
        }

        /* .card__body {
                    font-size: 0.9rem;
                } */

        img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            max-width: 100%;
            border-radius: 5px;
        }

        ul,
        ol {
            margin: .5rem 0 .5rem 1.5rem;
        }

        a {
            color: rgb(55, 172, 127);
        }

        ul {
            margin: .5rem 0;
            padding-left: 1rem;
        }

        a {
            color: rgb(55, 172, 127);
        }

    </style>
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
            <h4 class="card__description">
                {{ $event->description }}
            </h4>
            <div class="card__content">
                {!! $event->content !!}
            </div>
        </div>
    </div>
@endsection
