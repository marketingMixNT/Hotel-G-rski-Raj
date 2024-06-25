<x-layouts.app>

    {{-- META --}}
    @section('title', 'Lokale Atrakcje – Odkryj Najlepsze Miejsca na Podhalu | Hotel Góralski Raj')
    @section('description',
        'Poznaj lokalne atrakcje na Podhalu i odkryj najlepsze miejsca do odwiedzenia podczas pobytu
        w Hotelu Góralski Raj. Czekają na Ciebie niezapomniane wrażenia.')

        {{-- HEADER --}}
        <x-slot name='header'>
            <x-shared.header title="Udogodnienia hotelowe" bgi="{{ asset('assets/img/view.jpeg') }}" >
            
                <x-shared.booking-panel/>

            </x-shared.header>
        </x-slot>

        {{-- MAIN --}}

        <section class="section max-w-screen-2xl px-6 md:px-12">

             <!--heading-->
    <div class="w-full mx-auto flex justify-center items-center">
        <x-heading-horizontal subheading="Hotel Góralski Raj" heading="Pokoje Pełne Górskiego Uroku"
            decor="Komfort i spokój na każdą porę roku"
            text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />
    </div>

            <div class="flex flex-col gap-40">


                @foreach ($hotelAttractions as $index => $attraction)
                <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
                    {{-- image --}}
                    <div class="{{ $index % 2 === 0 ? 'lg:order-1' : '' }} w-full lg:w-1/2 flex justify-center items-center">
                        <img src="{{ asset('/storage/' .$attraction['thumbnail']) }}" alt="{{ $attraction['title'] }}" class=" object-cover w-full h-[450px]">
                    </div>
                    {{-- text --}}
                    <div class="w-full lg:w-1/2 flex flex-col justify-evenly items-start gap-4 lg:gap-0">
                        <h2 class="text-4xl font-bold">{{ $attraction['title'] }}</h2>
                        <p>{!! $attraction['short_desc'] !!}</p>
                    
                       
                        <x-ui.link-button type='secondary' href="{{route('hotelAttraction',$attraction['slug'])}}">Zobacz</x-ui.link-button>

                    </div>

                </div>
                @endforeach
            </div>
        </section>


    </x-layouts.app>
