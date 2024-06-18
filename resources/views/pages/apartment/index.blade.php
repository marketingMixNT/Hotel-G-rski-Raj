<x-layouts.Main>

  

    @section('title', $apartment['meta_title'])
    @section('description', $apartment['meta_desc'])


    <x-slot name='header'>
        <x-Header title="{{$apartment['name']}}" bgi="{{ asset('/storage' . $apartment['banner_img']) }}" />

    </x-slot>

    {{-- @section('title', 'Pokój z 2 Łóżkami King-Size w Zajazd Śleboda: Komfort i Relaks') --}}
    {{-- @section('description', 'Odkryj luksusowy pokój z 2 łóżkami king-size w Zajazd Śleboda. Idealne miejsce dla par i rodzin szukających wygody. Rezerwuj teraz i ciesz się niezapomnianym pobytem!') --}}

    {{-- @include('pages.apartments.apartment-one.sections.header') --}}

    <main class='pt-24'>
        <!--CONTAINER -->
        <div class='grid grid-cols-2 max-w-screen-xl mx-auto gap-24'>

            <!--LEFT -->
            <div class="flex flex-col gap-20">

                <div><span class="text-5xl font-handwriting">{{ $apartment['name'] }}</span></div>

                <img src="{{ asset('/storage' . $apartment['gallery'][0]) }}"
                    alt="wnętrze pokoju z 2 łóżkami typu king-size w Zajazd Śleboda w Zębie" width="600" height="700"
                    loading="lazy" class="h-[700px] object-cover" />


                <div><span>{!! $apartment['short_desc'] !!}</span></div>
            </div>
            <!--RIGHT -->
            <div class="flex flex-col gap-20">

                <div><span>{!! $apartment['description'] !!}</span></div>

                <img src="{{ asset('/storage' . $apartment['gallery'][0]) }}"alt="wnętrze pokoju z 2 łóżkami typu king-size w Zajazd Śleboda w Zębie"
                    width="465" height="405" loading="lazy" class='pr-32 h-[400px]' />

                <!--AMENITIES -->
                {{-- @include('pages.apartments.apartment-one.sections.amenities') --}}
                <div>
                    <h2 class='h2 mb-12'>Wyposażenie Pokoju</h2>

                    <ul class="grid grid-cols-2 gap-10">
                        <li class='flex justify-start items-center gap-2'><img
                            src="{{asset('/storage' . $apartment['amenities'][0]['icons'])}}" class="w-5" />{{ $apartment['amenities'][0]['name']}}
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--SWIPER -->
        <section class="lg:mt-60 pt-24">

            <div class="2xl:py-72   w-full relative" id="image_slider">
                {{-- <image-slider :menu="{{ json_encode($images) }}"></image-slider> --}}
            </div>
        </section>
        <!--INFO -->
        {{-- @include('pages.apartments.apartment-one.sections.info') --}}
    </main>

    <!--OTHER ROOMS -->
    {{-- @include('pages.apartments.apartment-one.sections.other-rooms') --}}

</x-layouts.Main>
