<div class="swiper hero-carousel w-full h-screen bg-gray-500 relative">
    <div class="swiper-wrapper">
        <h1 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-7xl font-semibold z-50 font-heading text-center text-white leading-tight tracking-wide">Villa Górski Raj <br> <span class="font-handwritting font-normal text-6xl">Odkryj Luksus w Sercu Gór </span></h1>

        @foreach ($slides as $slide)
            {
            <div class="swiper-slide w-full h-full relative">
                {{-- <img src="{{ '/storage/' . $slide['image'] }}" alt="{{ $slide['alt'] }}" --}}
                <img src="{{$slide['image']}}" alt="{{ $slide['alt'] }}"
                    class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            }
        @endforeach

        <a href="#o-nas" class="absolute bottom-12 left-1/2 transform -translate-x-1/2 z-50">
            <img src="{{asset('/icons/arrow-down.svg')}}" alt="" class="animate-pulse w-12">
        </a>
    </div>
</div>