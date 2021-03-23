@extends('layouts.frontend.index')

@section('seo')
    <title>Profile · Taschkent, Usbekistan</title>
    <meta hid="description" name="description" content="Here is a profile page">
@endsection
@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/profile.css') }}">
@endsection
@section('content')
    <section class="profile">
        <div class="container">
            <div class="profile__row">
                <h1 class="profile__title">
                    Profile
                </h1>
                <div class="profile__card">

                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="profile__header">
                            <div class="profile__image">
                                <img src="/assets/img/user.png" alt="">
                            </div>
                            <div class="profile__group">

                                <h2>Basic Info</h2>
                                <p>Deast</p>
                                {{-- <div class="profile__form-group">
                                    <label for="firstname">Email</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="Enter your first name ..."
                                        value="{{ auth()->user()->email }}" required>
                                </div>
                                <div class="profile__form-group">
                                    <label for="lastname">Email</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Enter your last name ..."
                                        value="{{ auth()->user()->email }}" required>
                                </div>
                                <div class="profile__form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your email ..."
                                        value="{{ auth()->user()->email }}" required>
                                </div> --}}
                            </div>
                        </div>

                        <textarea name="bio" id="bio" rows="4"></textarea>


                        <input class="profile__submit" type="submit" value="Save your changes">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
