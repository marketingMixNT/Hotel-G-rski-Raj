<div class="swiper hero-carousel w-full h-screen bg-gray-500 relative">
    <div class="swiper-wrapper ">
        <h1
            class="absolute px-6 md:px-12 top-1/2 left-0 right-0 -translate-y-1/2 text-5xl md:text-8xl font-semibold z-50 font-heading text-center text-white leading-tight tracking-wide">
            Villa Górski Raj <br> <span class="font-handwritting font-normal text-4xl md:text-5xl">Odkryj Luksus w Sercu Gór </span>
        </h1>

        @foreach ($slides as $slide)
            {
            <div class="swiper-slide w-full h-full relative">
            
                <img src="{{'/storage' . $slide['image'] }}" alt="{{ $slide['alt'] }}" width="1920" height="1080"
                    class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            }
        @endforeach

        
        <!--RESERVATION PANEL-->
        <x-shared.BookingPanel/>
        <x-ui.LinkBtn type='primary' class="md:hidden mt-12 absolute bottom-36 left-1/2 transform -translate-x-1/2" href="#" aria-label="#">Rezerwuj</x-ui.LinkBtn>

        <a href="#o-nas" class="absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50">
            <img src="{{ asset('assets/icons/arrow-down.svg') }}" alt="" class="animate-pulse w-8 md:w-12">
        </a>
    </div>
</div>
