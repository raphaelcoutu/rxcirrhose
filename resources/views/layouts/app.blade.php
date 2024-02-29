<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
    <head>
        @include('layouts.analytics')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ __('navbar.brand') }}</title>

        @section('metadata')
            @hasSection('description')
                <meta name="description" content="@yield('description')"/>
                <meta property="og:description" content="@yield('description')"/>
            @else
                <meta name="description" content="{{ __('navbar.description') }}"/>
                <meta property="og:description" content="{{ __('navbar.description') }}"/>
            @endif
                <meta property="og:url" content="{{ url()->current() }}"/>
                <meta property="og:type" content="article"/>
                <meta property="og:title" content="@yield('title') - {{ __('navbar.brand') }}"/>
        @show

    <title>@yield('title') - {{ __('navbar.brand') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans flex flex-col bg-red-100 min-h-screen">

        <div id="app" class="flex flex-col min-h-screen">
            @yield('content')
        </div>

        @vite('resources/js/app.js')

    </body>
</html>
