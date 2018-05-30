<!doctype html>
<html lang="{{ app()->getLocale() }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('metadata')
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RxCirrhose" />
    <meta property="og:description" content="Référence d'ajustement des médicaments en insuffisance hépatique." />
    @show

    <title>RxCirrhose</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body class="font-sans flex flex-col min-h-screen bg-red-lightest">

<div id="app" class="flex flex-col min-h-screen">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>