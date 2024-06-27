<x-layouts.app>
    {{-- META --}}
    @section('title', 'Oferty Specjalne | Hotel Góralski Raj - Promocje i Pakiety')
    @section('description', 'Sprawdź nasze oferty specjalne w Hotelu Góralski Raj. Skorzystaj z wyjątkowych promocji i pakietów pobytowych, aby cieszyć się luksusem w sercu Tatr.')
    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="Oferty specjalne" bgi="{{ asset('assets/img/offers.webp') }}">

            <x-shared.booking-panel/>
        </x-shared.header>

    </x-slot>

    {{-- MAIN --}}
    <x-section class="max-w-screen-2xl">


        <div class="w-full mx-auto flex justify-center items-center">
            <x-heading-horizontal subtitle="Hotel Góralski Raj" title="Aktualne Oferty Specjalne"
                decor="Nie Przegap Naszych Aktualnych Ofert"
                text="Zapraszamy do skorzystania z naszych wyjątkowych ofert specjalnych, które zostały przygotowane z myślą o Twoim komforcie i niezapomnianych wrażeniach. Odkryj atrakcyjne promocje, pakiety pobytowe oraz sezonowe rabaty, które uczynią Twój pobyt w Hotelu Góralski Raj jeszcze bardziej wyjątkowym. Rezerwuj teraz i ciesz się luksusem w sercu Tatr!" />
        </div>

        @foreach ($offers as $offer)
        
        <x-offer-card :offer='$offer' />
      
        @endforeach

    </x-section>
</x-layouts.app>
