<x-layouts.app>

    {{-- META --}}
    @section('title', $hotelAttraction['meta_title'])
    @section('description', $hotelAttraction['meta_desc'])

        {{-- HEADER --}}
        <x-slot name='header'>
            <x-shared.header title="{{$hotelAttraction->title}}" bgi="{{ asset('/storage/' . $hotelAttraction['banner_img']) }}" >
            
                <x-shared.booking-panel/>

            </x-shared.header>
        </x-slot>

        {{-- MAIN --}}
  {{-- MAIN --}}
  <x-section class="max-w-screen-2xl">

    {{-- top --}}
    <div class="flex justify-center items-center">

        <x-heading title="{{$hotelAttraction->title}}" subtitle="Poznaj nasze propozycje na pobyt" />
    </div>
    {{-- content --}}
    <div class="flex flex-col lg:flex-row mt-16 lg:mt-32">

        <div class="w-full lg:w-[60%] lg:pr-20 description order-1 lg:order-none">{!! $hotelAttraction->description !!} </div>


        <div class="w-full lg:w-[40%] relative "><img src="{{ asset('/storage/' . $hotelAttraction->thumbnail) }}" alt="{{$hotelAttraction->title}}"
                class="sticky top-32 h-[500px] w-full object-cover"></div>
    </div>
</x-section>
     
  <!--GALLERY -->
  <section class="section  px-6 md:px-12">
    <div class="swiper apartment-gallery-carousel">
        <div class="swiper-wrapper ">
            @foreach ($hotelAttraction['gallery'] as $img)
                <x-image-photo class=" h-[550px] p-4 swiper-slide">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src="{{ asset('/storage/' . $img) }}" alt="{{$hotelAttraction->title}}" width="527" height="540" loading="lazy"
                            class="w-full h-[540px] object-cover">
                    </a>
                </x-image-photo>
            @endforeach
        </div>
</section>

<!--OTHER ATTRACTIONS-->
<section class="section px-6 md:px-12 max-w-screen-2xl">

    <!--heading-->
    <div class="w-full mx-auto flex justify-center items-center">
        <x-heading-horizontal subtitle="Hotel Góralski Raj" title="Pokoje Pełne Górskiego Uroku"
            decor="Komfort i spokój na każdą porę roku"
            text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />
    </div>
    <!--carousel-->
    <div class=" xs:mt-12 w-full relative">

        <div class="swiper other-rooms-carousel">
            <div class="swiper-wrapper ">
                @foreach ($otherAttractions as $attraction)

                <div class=" swiper-slide flex flex-col justify-between items-center h-full group">
                {{-- CONTAINER --}}
                <div class=" relative flex flex-col  h-full group" onclick="void(0)">
                    {{-- FRONT --}}
                    {{-- img --}}
                    <x-image-photo class='h-[400px] p-4'>
                        <img src="{{ asset('/storage/' . $attraction->thumbnail) }}" alt="{{ $attraction->name }}" width="548" height="368" loading="lazy"
                            class="w-full h-full object-cover">
                    </x-image-photo>
                    {{-- title --}}
                    <div class="flex flex-grow flex-col justify-between items-center gap-4   py-8">
            
                        <div class="flex justify-center items-center min-h-[100px] ">
            
                            <h2 class="text-4xl font-semibold  font-heading text-center">
                                {{ $attraction->title }}
                            </h2>
                        </div>
                    </div>
            
                    {{-- BACK --}}
                    <div
                        class="absolute left-0 right-0 top-0 bottom-4 p-4 bg-primary-400  shadow-lg opacity-0 group-hover:opacity-100 duration-500  ">
                        <div class="flex flex-col justify-center items-center gap-12 h-full px-6 py-12 text-center bg-primary-400">
                            {{-- text --}}
                            <h2 class="font-semibold text-4xl font-heading"> {{ $attraction->title }}</h2>
                            <div class="text">{!! $attraction->short_desc !!}</div>
                            
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2 mb-6 w-full">
                    
            
                        
                    <a href="{{ route('hotel-attractions.show',$attraction->slug)}}"
                        class="px-16 py-4 shadow-xl group-hover:bg-black group-hover:text-white duration-500 bg-white">Sprawdź</a>
                </div>
            </div>
                @endforeach
            </div>
        </div>

</section>

    </x-layouts.Main>
