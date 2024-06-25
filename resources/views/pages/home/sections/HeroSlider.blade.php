<div class="swiper hero-carousel relative w-full h-screen bg-gray-500 ">
    <div class="swiper-wrapper ">
          {{-- heading --}}
        <h1
            class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-5xl md:text-8xl 2xl:text-9xl font-semibold  font-heading  text-fontWhite leading-tight sm:leading-3 tracking-wide z-50">
            Villa Górski Raj <br> <span class=" text-xl sm:text-3xl 2xl:text-4xl font-handwritting">Odkryj luksus w sercu
                gór </span>
        </h1>

        @foreach ($slides as $slide)
            {
            <div class="swiper-slide relative w-full h-full ">

                <img src="{{ asset('/storage/' . $slide['image']) }}" alt="{{ $slide['alt'] }}" width="1920"
                    height="1080" class="absolute inset-0 w-full h-full object-cover" />
                {{-- bg cover opacity --}}
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            }
        @endforeach


        <!--RESERVATION PANEL-->
        <x-shared.booking-panel />
        <x-ui.link-button type='primary' class="md:hidden absolute mt-12  bottom-36 left-1/2 transform -translate-x-1/2"
            href="#" aria-label="#">Rezerwuj</x-ui.link-button>

        <a href="#o-nas" class="absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50">
            <img src="{{ asset('assets/icons/arrow-down.svg') }}" alt="" width="48" height="48" class="animate-pulse w-8 md:w-12">
        </a>
    </div>
</div>
