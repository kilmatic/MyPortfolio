<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Boxicons -->
    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}
</head>
<body>
    <div id="app">
        @include('inc.nav')
        <main>
            {{-- @include('inc.msgs') --}}
            @yield('content')
        </main>
        {{-- @include('inc.footer') --}}
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxkbCs4SoXqAfWSKKhHExbrnQmZx89MsY&;libraries=places&callback=initMap" async="" defer=""></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
