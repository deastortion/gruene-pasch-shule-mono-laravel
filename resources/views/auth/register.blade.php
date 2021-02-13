@extends('layouts.auth')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('assets/css/content/login.css')}}">

@endsection

@section('content')
    <section class="login">
        <div class="container">
            {{-- @include('errors') --}}
            <div class="login__row">
                <div class="login__card">
                    <div class="login__image">
                        <img src="{{ asset('assets/img/verified.svg')}}" alt="">
                    </div>
                    <form action="{{ route('register') }}" method="POST" class="login__form">
                        @csrf
                        <h1 class="login__title title">
                            Register
                        </h1>
                        <div class="login__name">
                            <input type="text" class="@error('name') input__invalid @enderror" name="name" id="name" placeholder="Name ..." value="{{old('name')}}">
                            @error('name') 
                                <span class="login__error" role="alert">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="login__email">
                            <input type="email" class="@error('email') input__invalid @enderror" name="email" id="email" placeholder="Email address ..." value="{{old('email')}}">
                            @error('email') 
                                <span class="login__error" role="alert">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="login__password">
                            <input type="password" class="@error('password') input__invalid @enderror" name="password" id="password" placeholder="Password ...">
                            @error('password') 
                                <span class="login__error" role="alert">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="login__password-confirmation">
                            <input type="password" class="@error('password_confirmation') input__invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Password confirm ...">
                        </div>
                        <input type="submit" value="Let's go" class="login__submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
