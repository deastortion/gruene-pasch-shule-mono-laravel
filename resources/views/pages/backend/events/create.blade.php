@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/events/create.css') }}">
@endsection

@section('content')

    <div class="card">
        <div class="card__header">
            <h1>Create a new event</h1>
        </div>
        <div class="card__body">

            <form action="{{ url('dashboard/events') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <label for="title">Title</label>
                    <input name="title" type="text" id="title" class="@error('title') is-invalid @enderror"
                        placeholder="Enter a title ..." value="{{ old('title') }}">
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <label for="description">Description</label>
                    <input name="description" type="text" id="description"
                        class="@error('description') is-invalid @enderror" placeholder="Enter a description ..."
                        value="{{ old('description') }}">
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10"
                        class="@error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror"
                        value="{{ old('image') }}">
                    @error('image')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="settings">
                    <input type="submit" value="Create">
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
