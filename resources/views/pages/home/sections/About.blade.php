<section id="o-nas" class="section px-6 md:px-12">

    {{-- HEADING --}}
    <div class="text-center pb-12 sm:pb-24">

        <x-heading title="Atrybuty Naszego Hotelu" subtitle="Przyjazd tutaj to początek wyjątkowej podróży" />
    </div>

    {{-- CONTENT --}}
    <div class="sm:px-6 md:px-12 2xl:px-32 mx-auto relative">

        <div class="swiper advantages-carousel shadow-lg">
            <div class="swiper-wrapper ">
                @foreach ($advantages as $advantage)
                    <x-advantage-card :advantage="$advantage" />
                @endforeach
            </div>
        </div>
    </div>
</section>
