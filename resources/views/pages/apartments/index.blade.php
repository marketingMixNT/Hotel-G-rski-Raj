<x-layouts.Main>
    {{-- META --}}
    @section('title', 'Wszystkie Apartamenty')
    @section('description', 'Wszystkie Apartamenty')
    {{-- HEADER --}}
    <x-slot name='header'>
        <x-Header title="Wszystkie apartamenty" bgi="{{ asset('assets/img/view.jpeg') }}">

            <x-shared.BookingPanel/>
        </x-Header>

    </x-slot>

    {{-- MAIN --}}
    <main class="max-w-screen-2xl mx-auto mt-24 px-6 md:px-12">


        <div class="w-full mx-auto flex justify-center items-center">
            <x-Heading-Horizontal subheading="Hotel Góralski Raj" heading="Pokoje Pełne Górskiego Uroku"
                decor="Komfort i spokój na każdą porę roku"
                text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />
        </div>

        @foreach ($apartments as $apartment)
            <x-ApartmentCard 
            name="{{ $apartment['name'] }}" 
            img="{{ asset('/storage/' . $apartment['gallery'][0]) }}"
            shortDesc="{!! $apartment['short_desc']!!}" 
            surface="{{ $apartment['surface'] }}"
            person="{{ $apartment['person'] }}" 
            beds="{{ $apartment['beds'] }}" 
            link="{{ route('apartment', $apartment['slug']) }}"
            reservationLink="{{ $apartment['reservationLink'] }}"
            />
        @endforeach

    </main>
</x-layouts.Main>
