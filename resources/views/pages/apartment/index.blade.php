<x-layouts.Main>

    {{-- META --}}
    @section('title', $apartment['meta_title'])
    @section('description', $apartment['meta_desc'])

    {{-- HEADER --}}
    <x-slot name='header'>
        <x-Header title="{{ $apartment['name'] }}" bgi="{{ asset('/storage' . $apartment['banner_img']) }}">
            <x-shared.BookingPanel />
        </x-Header>
    </x-slot>

    {{-- MAIN --}}
    <!--ABOUT ROOM -->
    <section class='section max-w-screen-xl  px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-24  '>

        <!--left -->
        <div class="flex flex-col gap-20">

            <div>
                <h2 class="text-6xl font-handwritting">{{ $apartment['name'] }}</h2>
            </div>



            <x-ImagePhoto class="h-[700px] max-h-[500px]">
                <img src="{{ asset('/storage' . $apartment['gallery'][0]) }}"
                    alt="Wnętrze {{ $apartment['name'] }} w Hotelu Góralski Raj" width="600" height="700"
                    loading="lazy" class="w-full h-full object-cover " />
            </x-ImagePhoto>


            <div>
                <p>{!! $apartment['short_desc'] !!}</p>
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
                                class="font-semibold">{{ $apartment['surface'] }} m²</span></span>
                    </li>
                    <li class="flex flex-col lg:flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/users.svg') }}" alt="" class="w-7"> <span
                            class="text-lg font-text pt-2">Maksymalna ilość osób:
                            <span class="font-semibold">{{ $apartment['person'] }}</span> </span>
                    </li>
                    <li class="flex flex-col lg:flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-7">
                        <span class="text-lg font-text pt-2">Ilość łózek: <span
                                class="font-semibold">{{ $apartment['beds'] }}</span> </span>
                    </li>
                </ul>
            </div>


            <x-ImagePhoto class="h-[400px]">
                <img src="{{ asset('/storage' . $apartment['gallery'][1]) }}"alt="Wnętrze {{ $apartment['name'] }} w Hotelu Góralski Raj"
                    width="465" height="405" loading="lazy" class='h-full w-full  object-cover ' />
            </x-ImagePhoto>

            <!--amenities -->

            <div>
                <h2 class='mb-12 font-semibold text-4xl '>Wyposażenie Pokoju</h2>

                <ul class="grid grid-cols-2 gap-10">
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>
                    <li class='flex justify-start items-center gap-3'><img {{-- src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}} --}}
                            src="{{ asset('assets/icons/bed.svg') }}" class="w-7" /> <span
                            class="mt-2">Łózko</span>
                    </li>

                </ul>
            </div>

        </div>
    </section>

    <!--GALLERY -->
    <section class="section  px-6 md:px-12">
        <div class="swiper apartment-gallery-carousel">
            <div class="swiper-wrapper ">
                @foreach ($apartment['gallery'] as $img)
                    <x-ImagePhoto class=" h-[550px] p-4 swiper-slide">
                        <a href="{{ asset('/storage' . $img) }}" class="glightbox">
                            <img src="{{ asset('/storage' . $img) }}" alt="sda"
                                class="w-full h-full object-cover">
                        </a>
                    </x-ImagePhoto>
                @endforeach
            </div>




    </section>

    <!--DESCRIPTION -->
    <section class="section max-w-screen-xl px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 ">


        <div class="flex flex-col gap-10  col-span-2">
            <h2 class='font-semibold text-4xl'>Opis Pokoju</h2>
            <div class="description">

                {!! $apartment['description'] !!}
            </div>
        </div>


    </section>

    <!--CTA -->
    <section class="section">
        <div class="relative  flex flex-col justify-evenly items-center gap-12 w-full min-h-[600px] md:gap-20  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-500 "
            style="background-image: url('{{ asset('assets/img/view.jpeg') }}')">
            {{-- text --}}
            <div class="max-w-screen-xl text-center  space-y-12">

                <h2 class="text-5xl md:text-7xl text-fontWhite">Zarezerwuj Swój Wymarzony Pobyt Już Dziś!</h2>
                <p class="text px-12 text-white ">Przyjdź i odkryj wyjątkowy komfort oraz luksus w naszym hotelu. Od
                    relaksu w eleganckich pokojach po zachwycające widoki z okien – wszystko to czeka na Ciebie w sercu
                    Tatr. Nasz zespół z pasją dba o każdy detal, aby zapewnić Ci niezapomniane wrażenia i pełne
                    zadowolenie. </p>
            </div>
                {{-- btns --}}
            <div class="be-panel hidden md:block  mx-32 2xl:mx-0 px-12 bg-white"></div>
            <x-ui.LinkBtn type='primary' class="md:hidden">Zarezerwuj</x-ui.LinkBtn>

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
                    @foreach ($apartments as $offer)

                        <div class="flex flex-col justify-between items-center swiper-slide group h-full">
                            <a href="{{ route('apartment', $apartment['slug']) }}" class="flex flex-col relative group h-full">
                                <div class="bg-white h-[400px] shadow-2xl">
                                    <img src="{{ asset('/storage' . $offer['thumbnail']) }}"
                                        alt="{{ $offer['title'] }}" class="w-full h-full object-cover p-4">
                                </div>
                                <div class="flex flex-col justify-between items-center gap-4 py-8 flex-grow">
                                  
                                    <div class="min-h-[100px] flex justify-center items-center">

                                        <h2 class="font-semibold text-4xl font-heading text-center">
                                            {{ $offer['name'] }}
                                        </h2>
                                    </div>
                                </div>

                                {{-- info-card --}}
                                <div
                                    class="bg-white absolute left-0 right-0 top-0 bottom-4 p-4 shadow-xl opacity-0 group-hover:opacity-100 duration-500">
                                    <div
                                        class="flex flex-col justify-between items-center text-center bg-gray-200 h-full px-6 py-12">
                                       
                                        <h2 class="font-semibold text-4xl font-heading">{{ $offer['name'] }}</h2>
                                        <div class="text">{!! $offer['short_desc'] !!}</div>
                                        <hr class="border border-gray-400 w-12 ">
                                        <div class="flex flex-col items-center gap-4">

                                           <div class="flex gap-6">

                                           
                                            <div class="flex flex-col justify-center items-center gap-3 ">
                                                <img src="{{ asset('assets/icons/surface.svg') }}" alt=""
                                                    class="w-6">
                                                <span class="font-medium">
                                                    {{ $offer['surface'] }} m²</span>
                                            </div>
                                            <div class="flex flex-col justify-center items-center gap-3">
                                                <img src="{{ asset('assets/icons/users.svg') }}" alt=""
                                                    class="w-6">
                                                <span class="font-medium">max
                                                    {{ $offer['person'] }} </span>
                                            </div>
                                        </div>
                                            <div class="flex flex-col justify-center items-center gap-3 ">
                                                <img src="{{ asset('assets/icons/bed.svg') }}" alt=""
                                                    class="w-6">
                                                <span class="font-medium">
                                                    {{ $offer['beds'] }}</span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flex justify-center items-center mt-2 mb-6 w-full">
                                <a href="{{ route('apartment', $apartment['slug']) }}"
                                    class="px-16 py-4 shadow-xl group-hover:bg-black group-hover:text-white duration-500">Zobacz
                                    szczegóły</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    </section>

</x-layouts.Main>
