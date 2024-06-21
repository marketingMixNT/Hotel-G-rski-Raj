<section class="section px-6 md:px-12">

    <div class="text-center pb-24">

        <x-Heading title="Doświadcz niezapomnianej przygody" subtitle="Poznaj nasze propozycje na pobyt" />
    </div>

    <div class="max-w-screen-xl mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

        <x-OffersCarousel>
            @foreach ($offers as $offer)
                <x-OffersCarouselCard :offer="$offer" />
            @endforeach
        </x-OffersCarousel>


    </div>

</section>
