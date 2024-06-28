<x-section >

    {{-- HEADING --}}
    <x-heading-container>
        <x-heading subtitle="Poznaj nasze propozycje na pobyt" title="Doświadcz Niezapomnianej Przygody" />
    </x-heading-container>

    {{-- CONTENT --}}
    <x-section class="relative max-w-screen-xl ">
        <x-offers-carousel>
            @foreach ($offers as $offer)
                <x-offer-carousel-card :offer="$offer" />
            @endforeach
        </x-offers-carousel>
    </x-section>

</x-section>
