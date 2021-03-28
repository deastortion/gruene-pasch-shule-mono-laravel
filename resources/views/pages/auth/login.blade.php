@extends('layouts.auth.index')

@section('seo')
    <title>Login · Grüne Schule</title>
    <meta hid="description" name="description" content="This is the login page">
@endsection

@section('page-styles')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}"> --}}
    <link rel="stylesheet" href="/assets/css/auth/login/styles.css">
@endsection

@section('content')
    <section class="login">
        <div class="container">
            <div class="login_example"></div>
            <div class="login__row">
                <div class="login__card">
                    <div class="login__image">
                        <img src="{{ asset('assets/img/verified.svg') }}" alt="">
                    </div>
                    <form action="{{ route('login') }}" method="POST" class="login__form">
                        @csrf
                        <h1 class="login__title title">
                            {{-- Login --}}
                            @lang('login.title')
                        </h1>
                        <div class="login__email">
                            <input type="email" class="@error('email') input__invalid @enderror" name="email" id="email"
                                placeholder="@lang('login.email')" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="login__error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="login__password">
                            <input type="password" class="@error('password') input__invalid @enderror" name="password"
                                id="password" placeholder="@lang('login.password')" required>
                            @error('password')
                                <span class="login__error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="login__links">
                            @lang('login.redirect-to-home')
                        </div>
                        <div class="login__links" style="margin-top: -15px;">
                            <a href="{{ route('password.request') }}">Forgotten your password? Reset it here</a>
                        </div>
                        <input type="submit" value="@lang('login.button')" class="login__submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
