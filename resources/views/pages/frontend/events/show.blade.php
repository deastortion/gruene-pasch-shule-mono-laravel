@extends('layouts.frontend.index')

@section('seo')
    <title>{{ $event->title }} · Grüne Schule</title>
    <meta hid="description" name="description" content="{{ $event->description }}">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="/assets/css/frontend/events/show.css">
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
                    <h2 class="card__description">
                        - {{ $event->description }} -
                    </h2>
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
    <div class="comments">
        <div class="container">
            <div class="comments__comment-add card">
                <form method="POST" action="/comments">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <textarea required name="content" id="content" rows="3"
                        placeholder="Write your comment here ..."></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="comments__list">
                @if (count($event->comments) > 0)
                    @foreach ($event->comments as $comment)
                        <div class="comment card">
                            <div class="comment__user">
                                <div class="comment__avatar">
                                    <img src="/assets/img/user.png" alt="">
                                </div>
                                <div class="comment__name">
                                    {{ $comment->user->name }}
                                </div>
                                <div class="comment__date">
                                    {{ $comment->created_at->format('Y.m.d') }}
                                </div>
                            </div>
                            <div class="comment__body">
                                <div class="comment__content">
                                    {{ $comment->content }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
