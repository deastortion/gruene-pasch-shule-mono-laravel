<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- Icons --}}
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    {{-- CSS --}}
    @yield('unique-styles')
</head>

<body id="body-pd">

    {{-- Header --}}
    @include('layouts.backend.partials.header')

    {{-- Sidebar --}}
    @include('layouts.backend.partials.sidebar')



    {{-- Content --}}
    <main class="content">
        @yield('content')
    </main>




    {{-- Script for sidebar and header --}}
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    @yield('js')
</body>

</html>
