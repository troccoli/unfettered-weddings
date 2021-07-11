<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<div class="mx-auto container px-6 py-12 grid grid-cols-1">
    <div class="mx-auto mb-12">
        <h1 class="text-2xl lg:text-6xl leading-normal tracking-wide text-gray-800 text-center">Unfettered Weddings</h1>
    </div>
    <div class="mx-auto mb-12">
        <img src="{{ url('/images/tatiana-gonzales-eHQWnyFJdmE-unsplash.jpg') }}" class="w-full h-full"
             alt="Couple sitting on a rock in Cyprus in front of the sea" role="img"/>
    </div>
    <div class="mx-auto text-center">
        <h2 class="lg:text-4xl text-2xl font-normal leading-9 pb-6 f-f-d-s">Coming soon</h2>
    </div>
</div>
</body>
</html>
