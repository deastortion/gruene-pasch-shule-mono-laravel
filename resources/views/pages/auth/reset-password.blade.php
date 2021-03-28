@extends('layouts.auth.index')

@section('seo')
    <title>Password Reset</title>
@endsection

@section('page-styles')
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .forgot {
            font-family: 'Balsamiq Sans';
        }

        .forgot__body {
            display: flex;
            flex-direction: column;
        }

        .forgot__title {
            letter-spacing: 2px;
            color: rgb(248, 248, 248);
            text-shadow: 2px 2px 5px rgba(0, 85, 52, 0.75);
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .forgot__form {
            background: var(--white-color);
            padding: 1.5rem 1rem;
            border-radius: 5px;
            box-shadow: var(--shadow);
            color: rgb(79, 79, 79);
        }

        .forgot__form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .forgot__form-group label {
            margin-bottom: 0.25rem;
        }

        .forgot__form-input {
            padding: .75rem .75rem;
            border-radius: 5px;
            border: 1px solid rgba(204, 204, 204, 0.521);
            min-width: 400px;
        }

        .forgot__form-input.invalid {
            border: 1px solid rgba(255, 0, 68, 0.8);
            color: rgba(255, 0, 68, 0.8);
        }

        .forgot__form-input.invalid::placeholder {
            color: rgba(255, 0, 68, 0.8);
        }

        .forgot__form-submit {
            padding: .5rem 1rem;
            background: var(--first-color);
            color: var(--white-color);
            border-radius: 5px;
            cursor: pointer;
        }

        .message {
            width: 100%;
            margin-top: 2rem;
            border-radius: 2px;
            background: var(--first-color);
            padding: 1rem;
            box-shadow: var(--shadow);
            color: var(--white-color);
            max-width: 400px;
        }

        .error {
            margin-top: 0.25rem;
            font-size: 0.8rem;
            color: rgba(255, 0, 0, 0.822);
        }

    </style>
@endsection

@section('content')

    <section class="forgot">
        <div class="container">
            @if (session('status'))
                <div class="message">
                    {{ session('status') }}
                </div>
            @endif
            <div class="forgot__body center">
                <h1 class="forgot__title">
                    Forgot password
                </h1>
                <form action="{{ route('password.update') }}" method="POST" class="forgot__form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="forgot__form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="email" class="forgot__form-input"
                            placeholder="Type your email address here ..." required value="{{ $request->email }}">
                        @error('email')
                            <span class="error" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="forgot__form-group">
                        <label for="password">Password</label>
                        <input name="password" id="password" type="password" class="forgot__form-input"
                            placeholder="Type your email address here ..." required>
                        @error('password')
                            <span class="error" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="forgot__form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input name="password_confirmation" id="password_confirmation" type="password"
                            class="forgot__form-input" placeholder="Type your email address here ..." required>
                        @error('password_confirmation')
                            <span class="error" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <input type="submit" class="forgot__form-submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
@endsection
