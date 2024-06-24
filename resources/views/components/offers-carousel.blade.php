<div class="swiper offer-carousel max:mx-16">
    <div class="swiper-wrapper ">
        {{-- FOR EACH CARD --}}
        {{ $slot }}
    </div>
    {{-- NAVIGATION --}}
    <nav class="flex flex-col xs:flex-row justify-center items-center mt-16 gap-6">

        <button type="button" class="offer-prev bg-secondary-400 hover:bg-third-400   duration-500  p-3 "><img
                src="{{ asset('assets/icons/arrow-left.svg') }}" alt="" class="w-7"
                aria-label="poprzedni"></button>
        <a href="{{route('offers')}}"
            class=" py-4 px-12 bg-secondary-400 hover:bg-third-400  text-fontWhite duration-500 text-center">Zobacz
            wszystkie</a>
        <button type="button" class="offer-next bg-secondary-400 hover:bg-third-400   duration-500 p-3"><img
                src="{{ asset('assets/icons/arrow-right.svg') }}" alt="" class="w-7"
                aria-label="następny"></button>
    </nav>
</div>
