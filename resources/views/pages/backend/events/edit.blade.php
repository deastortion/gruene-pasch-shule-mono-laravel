@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/events/create.css') }}">

@endsection

@section('content')
    <div class="card">
        <div class="card__header">
            <h1>Edit the event</h1>
        </div>
        <div class="card__body">

            <form action="{{ url('dashboard/events/' . $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                @if ($event->image)
                    <div class="input">
                        <label for="old-image">Image</label>
                        <img src="{{ $event->image }}" alt="" id="old-image">
                    </div>
                @endif

                <div class="input">
                    <label for="title">Title</label>
                    <input name="title" type="text" id="title" class="@error('title') is-invalid @enderror"
                        value="{{ $event->title }}">
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <label for="description">Description</label>
                    <input name="description" type="text" id="description"
                        class="@error('description') is-invalid @enderror" value="{{ $event->description }}">
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10"
                        class="@error('content') is-invalid @enderror ckeditor">{{ $event->content }}</textarea>
                    @error('content')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <label for="image">New Image</label>
                    <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
                    @error('image')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="settings">
                    <input type="submit" value="Save">
                    <div class="data">
                        <div class="data__item">
                            Words: 125
                        </div>
                        <div class="data__item">
                            Time to read: 3min
                        </div>
                        <div class="data__item">
                            Links: 2
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');

    </script>
@endsection