
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    @foreach(\App\Models\CustomScript::where('position', 'first_place')->get() as $script)
        {!! $script->content !!}
    @endforeach
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>@yield('title', 'Hotel Góralski Raj')</title>
    <meta name="description" content='@yield('description')'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Hind:wght@300;400;500;600;700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
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
     @foreach(\App\Models\CustomScript::where('position', 'second_place')->get() as $script)
     {!! $script->content !!}
 @endforeach
<x-shared.Preloader/>
    <header>
        <x-shared.nav.navbar />
        <x-shared.nav.menu />
        {{ $header }}

      
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-shared.footer/>
    <x-shared.mobile-buttons/>
    

    @filamentScripts
    @vite('resources/js/app.js')
    <script src="https://wis.upperbooking.com/owcedwie/be-panel?locale=pl" async></script>
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    @foreach(\App\Models\CustomScript::where('position', 'third_place')->get() as $script)
        {!! $script->content !!}
    @endforeach
</body>

</html>