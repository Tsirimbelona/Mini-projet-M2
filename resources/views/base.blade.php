<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">


</head>

<body>

    {{-- Tous nos content seront affiche ici --}}
    @yield('content')

    {{-- Nos scripts javascript --}}
    @include('script')

</body>

</html>
