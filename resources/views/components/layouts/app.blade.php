<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    @foreach (\App\Models\CustomScript::where('position', 'first_place')->get() as $script)
        {!! $script->content !!}
    @endforeach
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{-- No Follow --}}
    @isset($noFollow)
    <meta name="robots" content="noindex, nofollow">
    @endisset

    <!--Title-->
    <title>@yield('title', 'Hotel Góralski Raj')</title>
    <meta name="description" content='@yield('description')'>

    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Favicon-->
    @include('partials.favicon')
    
    <!--Fonts-->
    @include('partials.fonts')

    
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/scss/app.scss')
</head>

<body class="overflow-x-hidden bg-bgPrimary">
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    @foreach (\App\Models\CustomScript::where('position', 'second_place')->get() as $script)
        {!! $script->content !!}
    @endforeach
    <x-shared.preloader />
    <header>
        <x-shared.nav.navbar />
        <x-shared.nav.menu />
        {{ $header }}


    </header>

    <main>
        {{ $slot }}
    </main>

    <x-shared.footer />
    <x-shared.mobile-buttons />


    @filamentScripts
    @vite('resources/js/app.js')
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    @foreach (\App\Models\CustomScript::where('position', 'third_place')->get() as $script)
        {!! $script->content !!}
    @endforeach
</body>

</html>
