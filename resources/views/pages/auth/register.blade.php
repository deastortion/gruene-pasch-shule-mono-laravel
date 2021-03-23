@extends('layouts.auth.index')

@section('seo')
    <title>Registration · Grüne Schule</title>
    <meta hid="description" name="description" content="Here is the registration page">
@endsection

@section('page-styles')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}"> --}}
    <link rel="stylesheet" href="/assets/css/auth/register/styles.css">

@endsection

@section('content')
    <section class="login">
        <div class="container">
            <div class="login__row">
                <div class="login__card">
                    <div class="login__image">
                        <img src="{{ asset('assets/img/verified.svg') }}" alt="">
                    </div>
                    <form action="{{ route('register') }}" method="POST" class="login__form">
                        @csrf
                        <h1 class="login__title title">
                            {{-- Register --}}
                            @lang('register.title')

                        </h1>
                        <div class="login__name">
                            <input type="text" class="@error('name') input__invalid @enderror" name="name" id="name"
                                placeholder="@lang('register.name')" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="login__error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="login__email">
                            <input type="email" class="@error('email') input__invalid @enderror" name="email" id="email"
                                placeholder="@lang('register.email')" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="login__error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="login__password">
                            <input type="password" class="@error('password') input__invalid @enderror" name="password"
                                id="password" placeholder="@lang('register.password')" required>
                            @error('password')
                                <span class="login__error" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="login__password-confirmation">
                            <input type="password" class="@error('password_confirmation') input__invalid @enderror"
                                name="password_confirmation" id="password_confirmation"
                                placeholder="@lang('register.password-confirm')" required>
                        </div>
                        <div class="login__links">
                            @lang('register.redirect-to-home')
                        </div>
                        <input type="submit" value="@lang('register.button')" class="login__submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
