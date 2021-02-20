@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/content/users/show.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card__header">
            <div class="user__image">
                <img src="/assets/img/profile.jpg" alt="">
            </div>
            <div class="user__info">
                {{$user->name}}
            </div>
        </div>
        <div class="card__body">
            <div class="user__info">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dicta, soluta pariatur reiciendis
                totam, ipsa maiores nihil officia cupiditate dignissimos saepe recusandae, repudiandae aliquam! Autem porro
                voluptatibus non obcaecati eos?
            </div>
        </div>
    </div>
@endsection
