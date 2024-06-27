<x-layouts.app>

    {{-- META --}}
    @section('title', 'Atrakcje Hotelowe | Hotel Góralski Raj - Rozrywka i Relaks')
    @section('description',
        'Odkryj atrakcje hotelowe w Hotelu Góralski Raj. Skorzystaj z luksusowego SPA, basenu, restauracji i wielu innych udogodnień, które umilą Twój pobyt.')

        {{-- HEADER --}}
        <x-slot name='header'>
            <x-shared.header title="Atrakcje Hotelowe" bgi="{{ asset('assets/img/spa.webp') }}" >
            
                <x-shared.booking-panel/>

            </x-shared.header>
        </x-slot>

        {{-- MAIN --}}

        <x-section class=" max-w-screen-xl ">

             <!--heading-->
    <div class="w-full mx-auto flex justify-center items-center">
        <x-heading-horizontal subtitle="Hotel Góralski Raj" title="Wyjątkowe Atrakcje Dla Gości"
            decor="Komfort i spokój na każdą porę roku"
            text="Zapraszamy do odkrycia naszych wyjątkowych atrakcji hotelowych, które zostały przygotowane z myślą o Twoim komforcie i rozrywce. Od luksusowego SPA, przez basen z widokiem na Tatry, po wspaniałą restaurację i bar - każdy znajdzie coś dla siebie. Spędź niezapomniane chwile i zrelaksuj się w Hotelu Góralski Raj, korzystając z naszych licznych atrakcji. Rezerwuj teraz i ciesz się pełnią możliwości, jakie oferuje nasz hotel!" />
    </div>

            <div class="flex flex-col gap-20">


                @foreach ($hotelAttractions as $index => $attraction)
                <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 group">
                    {{-- image --}}
                    <div class="{{ $index % 2 === 0 ? 'lg:order-1' : '' }} w-full lg:w-1/2 flex justify-center items-center overflow-hidden">
                        <img src="{{ asset('/storage/' .$attraction['thumbnail']) }}" alt="{{ $attraction['title'] }}" class=" object-cover w-full h-[450px] group-hover:scale-110 duration-500">
                    </div>
                    {{-- text --}}
                    <div class="w-full lg:w-1/2 flex flex-col justify-center items-start gap-4 lg:gap-5">
                        <h2 class="text-4xl font-bold">{{ $attraction['title'] }}</h2>
                        <p>{!! $attraction['short_desc'] !!}</p>
                    
                       
                        <x-ui.link-button type='secondary' href="{{route('hotel-attractions.show',$attraction['slug'])}}">Zobacz</x-ui.link-button>

                    </div>

                </div>
                @endforeach
            </div>
        </x-section>


    </x-layouts.app>
