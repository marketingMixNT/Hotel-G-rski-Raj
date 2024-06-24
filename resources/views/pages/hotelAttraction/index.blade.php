<x-layouts.Main>

    {{-- META --}}
    @section('title', $hotelAttraction['meta_title'])
    @section('description', $hotelAttraction['meta_desc'])

        {{-- HEADER --}}
        <x-slot name='header'>
            <x-Header title="{{$hotelAttraction->title}}" bgi="{{ asset('/storage' . $hotelAttraction['banner_img']) }}" >
            
                <x-shared.BookingPanel/>

            </x-Header>
        </x-slot>

        {{-- MAIN --}}
  {{-- MAIN --}}
  <section class="section px-6 md:px-12 max-w-screen-2xl">

    {{-- top --}}
    <div class="flex justify-center items-center">

        <x-Heading title="{{$hotelAttraction->title}}" subtitle="Poznaj nasze propozycje na pobyt" />
    </div>
    {{-- content --}}
    <div class="flex flex-col lg:flex-row mt-16 lg:mt-32">

        <div class="w-full lg:w-[60%] lg:pr-20 description order-1 lg:order-none">{!! $hotelAttraction->description !!} </div>


        <div class="w-full lg:w-[40%] relative "><img src="{{ asset('/storage' . $hotelAttraction->thumbnail) }}" alt=""
                class="sticky top-32 h-[500px] w-full"></div>
    </div>
</section>
     
  <!--GALLERY -->
  <section class="section  px-6 md:px-12">
    <div class="swiper apartment-gallery-carousel">
        <div class="swiper-wrapper ">
            @foreach ($hotelAttraction['gallery'] as $img)
                <x-ImagePhoto class=" h-[550px] p-4 swiper-slide">
                    <a href="{{ asset('/storage' . $img) }}" class="glightbox">
                        <img src="{{ asset('/storage' . $img) }}" alt="sda"
                            class="w-full h-full object-cover">
                    </a>
                </x-ImagePhoto>
            @endforeach
        </div>
</section>

<!--OTHER ROOMS -->
<section class="section px-6 md:px-12 max-w-screen-2xl">

    <!--heading-->
    <div class="w-full mx-auto flex justify-center items-center">
        <x-Heading-Horizontal subheading="Hotel Góralski Raj" heading="Pokoje Pełne Górskiego Uroku"
            decor="Komfort i spokój na każdą porę roku"
            text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />
    </div>
    <!--carousel-->
    <div class=" xs:mt-12 w-full relative">

        <div class="swiper other-rooms-carousel">
            <div class="swiper-wrapper ">
                @foreach ($otherAttractions as $apartment)

                {{$apartment['title']}}
                    {{-- <x-OtherApartmentCard link="{{ route('apartment', $apartment['slug']) }}"
                        thumbnail="{{ asset('/storage' . $apartment['thumbnail']) }}"
                        name=" {{ $apartment['name'] }}" shortDesc="{!! $apartment['short_desc'] !!}"
                        surface="  {{ $apartment['surface'] }}" person=" {{ $apartment['person'] }}"
                        beds=" {{ $apartment['beds'] }}" /> --}}
                @endforeach
            </div>
        </div>

</section>

    </x-layouts.Main>
