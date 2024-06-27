<x-layouts.app>

    {{-- META --}}
    @section('title', $apartment->meta_title)
    @section('description', $apartment->meta_desc)

    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="{{ $apartment->name }}" bgi="{{ asset('/storage/' . $apartment->banner_img) }}">
            <x-shared.booking-panel />
        </x-shared.header>
    </x-slot>

    {{-- MAIN --}}
    <!--ABOUT ROOM -->
    <x-section class='max-w-screen-xl  grid grid-cols-1 lg:grid-cols-2 gap-24  '>

        <!--left -->
        <div class="flex flex-col gap-20">

            <div>
                <h2 class="text-6xl font-handwritting">{{ $apartment->name }}</h2>
            </div>



            <x-image-photo class="h-[700px] max-h-[500px]">
                <img src="{{ asset('/storage/' . $apartment->gallery[0]) }}"
                    alt="Wnętrze {{ $apartment->name }} w Hotelu Góralski Raj" width="600" height="700"
                    loading="lazy" class="w-full h-full object-cover " />
            </x-image-photo>


            <div>
                <p>{!! $apartment->short_desc !!}</p>
            </div>
        </div>

        <!--right -->
        <div class="flex flex-col gap-20">

            {{-- info --}}
            <div class=" mx-auto lg:mx-0">
                <ul class="flex items-center lg:items-start flex-col flex-wrap gap-12">
                    <li class="flex flex-col lg:flex-row justify-center items-center gap-3">
                        <img src="{{ asset('assets/icons/surface.svg') }}" alt="" class="w-7">
                        <span class="text-lg font-text pt-2">Powierzchnia: <span
                                class="font-semibold">{{ $apartment->surface }} m²</span></span>
                    </li>
                    <li class="flex flex-col lg:flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/users.svg') }}" alt="" class="w-7"> <span
                            class="text-lg font-text pt-2">Maksymalna ilość osób:
                            <span class="font-semibold">{{ $apartment->person }}</span> </span>
                    </li>
                    <li class="flex flex-col lg:flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-7">
                        <span class="text-lg font-text pt-2">Ilość łózek: <span
                                class="font-semibold">{{ $apartment->beds }}</span> </span>
                    </li>
                </ul>
            </div>


            <x-image-photo class="h-[400px]">
                <img src="{{ asset('/storage/' . $apartment->gallery[1]) }}"alt="Wnętrze {{ $apartment->name }} w Hotelu Góralski Raj"
                    width="465" height="405" loading="lazy" class='h-full w-full  object-cover ' />
            </x-image-photo>

            <!--amenities -->

            <div>
                <h2 class='mb-12 font-semibold text-4xl '>Wyposażenie Pokoju</h2>

                <ul class="grid grid-cols-2 gap-10">
                    @foreach ($apartment->amenities as $item)
                        <li class='flex justify-start items-center gap-3'>

                            <x-icon name="{{$item->icon}}" class="w-9"/>
                            <span class="mt-1">{{ $item->name }}</span>
                          

                              
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>
    </x-section>

    <!--GALLERY -->
    <section class="section  px-6 md:px-12">
        <div class="swiper apartment-gallery-carousel">
            <div class="swiper-wrapper ">
                @foreach ($apartment->gallery as $img)
                    <x-image-photo class=" h-[550px] p-4 swiper-slide">
                        <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                            <img src="{{ asset('/storage/' . $img) }}" alt="Wnętrze apartamentu {{$apartment->name}} w Hotelu Górski Raj"
                                class="w-full h-[540px]  object-cover">
                        </a>
                    </x-image-photo>
                @endforeach
            </div>




    </section>

    <!--DESCRIPTION -->
    <section class="section max-w-screen-xl px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 ">


        <div class="flex flex-col gap-10  col-span-2">
            <h2 class='font-semibold text-4xl'>Opis Apartamentu</h2>
            <div class="description">

                {!! $apartment->description !!}
            </div>
        </div>


    </section>

    <!--CTA -->
    <x-section fullWidth="true" >
        <div class="relative  flex flex-col justify-evenly items-center gap-12 w-full min-h-[600px] md:gap-20  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-500 "
            style="background-image: url('{{ asset('assets/img/view.webp') }}')">
            {{-- text --}}
            <div class="max-w-screen-xl text-center  space-y-12">

                <h2 class="text-5xl md:text-7xl text-fontWhite">Zarezerwuj Swój Pobyt!</h2>
                <p class="text px-12 text-white ">Przyjdź i odkryj wyjątkowy komfort oraz luksus w naszym hotelu. Od
                    relaksu w eleganckich pokojach po zachwycające widoki z okien – wszystko to czeka na Ciebie w sercu
                    Tatr. Nasz zespół z pasją dba o każdy detal, aby zapewnić Ci niezapomniane wrażenia i pełne
                    zadowolenie. </p>
            </div>
            {{-- btns --}}
            <div class="be-panel hidden md:block  mx-32 2xl:mx-0 px-12 bg-white"></div>
            <x-ui.link-button type='primary' class="md:hidden">Zarezerwuj</x-ui.link-button>

        </div>
    </x-section>

    <!--OTHER ROOMS -->
    <section class="section px-6 md:px-12 max-w-screen-2xl">

        <!--heading-->
        <div class="w-full mx-auto flex justify-center items-center">
            <x-heading-horizontal subtitle="Hotel Góralski Raj" title="Znajdź Apartament dla Siebie"
                decor="KWybierz Luksus na Swój Własny Sposób"
                text="Zapraszamy do zapoznania się z naszą ofertą apartamentów, gdzie każdy znajdzie coś dla siebie. Nasze apartamenty zapewniają komfort i wygodę, eleganckie wnętrza, nowoczesne udogodnienia i widoki na Tatry. Niezależnie od tego, czy szukasz miejsca na romantyczny wyjazd, przestronnego apartamentu dla rodziny, czy luksusowej suity na specjalną okazję, mamy coś dla Ciebie. Zarezerwuj wyjątkowy pobyt w sercu gór już dziś!" />
        </div>
        <!--carousel-->
        <div class=" xs:mt-12 w-full relative">

            <div class="swiper other-rooms-carousel">
                <div class="swiper-wrapper ">
                    @foreach ($otherApartments as $apartment)
                    <x-other-apartment-card :apartment="$apartment" />

                    @endforeach
                </div>
            </div>

    </section>

</x-layouts.Main>
