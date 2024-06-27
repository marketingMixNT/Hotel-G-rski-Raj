{{-- js/paritals/swiper --}}

<div class="max:mx-16 swiper offer-carousel ">
    <div class="swiper-wrapper ">
        {{-- FOR EACH CARD --}}
        {{ $slot }}
    </div>
    {{-- NAVIGATION --}}
    <nav class="flex flex-col xs:flex-row justify-center items-center mt-16 gap-6">
        <x-ui.button-navigate-prev class="offer-prev hidden md:block" />
        {{-- <a href="{{ route('offers.index') }}"
            class=" py-4 px-12 bg-secondary-400 hover:bg-third-400  text-fontWhite duration-500 text-center">Zobacz
            wszystkie</a> --}}
            <x-ui.link-button--large href="{{ route('offers.index') }}">Zobacz
                wszystkie</x-ui.link-button--large>
        <x-ui.button-navigate-next class="offer-next hidden md:block" />
    </nav>
</div>
