<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
</head>
<body class="antialiased mx-auto flex flex-col justify-items-center">
<x-development.breakpoints/>
<x-navigation/>
<div class="w-full">
</div>
{{ $slot }}
<x-footer/>
<x-development.breakpoints/>
</body>
</html>
