<x-layouts.app noFollow=''>

    {{-- META --}}
    @section('title', 'Hotel Góralski Raj - Luksusowy Wypoczynek w Tatrach')
    @section('description',
        'Doświadcz wyjątkowego wypoczynku w Hotelu Góralski Raj, gdzie komfort i relaks spotykają
        się z pięknem górskich krajobrazów.')

        {{-- HEADER --}}
        <x-slot name='header'></x-slot>

        <x-shared.error-content errorCode='404'> Nie znaleziono strony</x-shared.error-content>

    </x-layouts.app>
