<section class="section px-6 md:px-12">

    <div class="text-center pb-24">

        <x-heading subtitle="Poznaj nasze propozycje na pobyt" title="Doświadcz Niezapomnianej Przygody"  />
    </div>

    <div class="max-w-screen-xl mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

        <x-offers-carousel>
            @foreach ($offers as $offer)
                <x-offer-carousel-card :offer="$offer" />
            @endforeach
        </x-offers-carousel>


    </div>

</section>
