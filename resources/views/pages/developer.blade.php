@extends('layouts.auth.index')

@section('page-styles')
    <style>
        .content {
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .developer__card {
            box-shadow: var(--shadow);
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            line-height: 1.4;
            font-size: 1rem;
            font-family: 'Balsamiq Sans' !important;
            color: rgba(49, 49, 49, 0.9);
        }

        p {
            margin-block: .25rem;
        }

        strong {
            color: var(--first-color);
        }

        .contact {
            font-size: 0.95rem;
            color: rgb(102, 102, 102);

    </style>
@endsection

@section('content')
    <section class="developer">
        <div class="container">
            <div class="developer__body">
                <div class="developer__card">
                    <p>
                        <strong>
                            Hello there!
                        </strong>
                    </p>
                    <p>
                        This website was developed by <strong>@deastortion</strong>
                    </p>
                    <p>
                        If you have any questions or offers, please contact me using the data below:
                    </p>
                    <br>
                    <p class="contact">
                        Email: deastortion@gmail.com
                    </p>
                    <p class="contact">
                        Telegram: @deastortion
                    </p>
                    <br>
                    <p>Thank you!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
