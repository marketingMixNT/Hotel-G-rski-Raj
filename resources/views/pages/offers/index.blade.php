<x-layouts.app>
    {{-- META --}}
    @section('title', 'Wszystkie Apartamenty')
    @section('description', 'Wszystkie Apartamenty')
    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="Wszystkie apartamenty" bgi="{{ asset('assets/img/view.jpeg') }}">

            <x-shared.booking-panel/>
        </x-shared.header>

    </x-slot>

    {{-- MAIN --}}
    <main class="max-w-screen-2xl mx-auto mt-24 px-6 md:px-12">


        <div class="w-full mx-auto flex justify-center items-center">
            <x-heading-horizontal subheading="Hotel Góralski Raj" heading="Pokoje Pełne Górskiego Uroku"
                decor="Komfort i spokój na każdą porę roku"
                text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />
        </div>

        @foreach ($offers as $offer)
        
        <x-offer-card :offer='$offer' />
      
        @endforeach

    </main>
</x-layouts.app>
