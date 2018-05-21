<!doctype html>
<html lang="{{ app()->getLocale() }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HépatoPharm</title>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <!-- Styles -->
</head>
<body class="font-sans flex flex-col min-h-screen bg-red-lightest">

<div id="app" class="flex flex-col min-h-screen">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>