<x-layouts.app>
    {{-- META --}}
    @section('title', 'Wszystkie Apartamenty | Hotel Góralski Raj - Luksusowe Zakwaterowanie')
    @section('description', 'Zobacz wszystkie apartamenty w Hotelu Góralski Raj. Oferujemy luksusowe zakwaterowanie, od komfortowych pokoi jednoosobowych po eleganckie apartamenty rodzinne i ekskluzywne suity.')
    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="Apartamenty" bgi="{{ asset('assets/img/apartments.webp') }}">
            <x-shared.booking-panel/>
        </x-shared.header>

    </x-slot>

    {{-- MAIN --}}
    <x-section class="max-w-screen-2xl">
        <div class="w-full mx-auto flex justify-center items-center">
            <x-heading-horizontal subtitle="Hotel Góralski Raj" title="Apartamenty Pełne Uroku"
                decor="Komfort i spokój na każdą porę roku"
                text="Nasze apartamenty to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas apartament idealnie dopasowany do Twoich potrzeb i oczekiwań." />
        </div>

        @foreach ($apartments as $apartment)
            <x-apartment-card 
            :apartment='$apartment'
            />
        @endforeach

    </x-section>
</x-layouts.app>
