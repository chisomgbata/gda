<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Gda Services') }}</title>


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
</head>
<body class="antialiased bg-body text-body font-body ">
<div class="">

    <x-nav/>


    <div class="container mx-auto">
        {{$slot}}

    </div>
    <x-footer/>

</div>
</body>
</html>

