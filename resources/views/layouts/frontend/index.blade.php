<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Some SEO-friendly code including title and some meta tags --}}
    @yield('seo')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Global css --}}
    {{-- <link rel="stylesheet" href="/assets/css/app.css"> --}}

    {{-- Some unique assets for a page --}}
    @yield('page-styles')


</head>

<body>

    {{-- Wrapper --}}
    <div class="wrapper">

        {{-- Header --}}
        @include('layouts.frontend.partials.header')

        {{-- Content --}}
        <main class="content">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.frontend.partials.footer')

    </div>

    {{-- Some javascript code --}}
    <script src="/assets/js/script.js"></script>
    @yield('js')

</body>

</html>
