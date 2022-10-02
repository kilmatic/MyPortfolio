<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KK') }}</title>

    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div id="app">
        {{-- @include('inc.navbar') --}}
        <main>
            {{-- @include('inc.msgs') --}}
            @yield('content')
        </main>
        {{-- @include('inc.footer') --}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
