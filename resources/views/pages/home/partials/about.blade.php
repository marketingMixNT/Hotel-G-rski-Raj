{{-- js/paritals/swiper --}}
<x-section id="o-nas">

    {{-- HEADING --}}
    <x-heading-container>
        <x-heading title="Atrybuty Naszego Hotelu" subtitle="Przyjazd tutaj to początek wyjątkowej podróży" />
    </x-heading-container>

    {{-- CONTENT --}}
    <div class="sm:px-6 md:px-12 2xl:px-32 mx-auto relative">
        <div class="shadow-lg swiper advantages-carousel">
            <div class="swiper-wrapper ">
                @foreach ($advantages as $advantage)
                    <x-advantage-card :advantage="$advantage" />
                @endforeach
            </div>
        </div>
    </div>
</x-section>
