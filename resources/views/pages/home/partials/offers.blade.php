<x-section>

    {{-- HEADING --}}
    <x-heading-container>
        <x-heading subtitle="Poznaj nasze propozycje na pobyt" title="Doświadcz Niezapomnianej Przygody" />
    </x-heading-container>

    {{-- CONTENT --}}
    <div class="relative max-w-screen-xl mx-auto  px-4 sm:px-32 md:px-12 xl:px-0">
        <x-offers-carousel>
            @foreach ($offers as $offer)
                <x-offer-carousel-card :offer="$offer" />
            @endforeach
        </x-offers-carousel>
    </div>

</x-section>
