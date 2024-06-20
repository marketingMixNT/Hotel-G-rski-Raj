<x-layouts.Main>

    {{-- META --}}
    @section('title', 'Lokale Atrakcje – Odkryj Najlepsze Miejsca na Podhalu | Hotel Góralski Raj')
    @section('description',
        'Poznaj lokalne atrakcje na Podhalu i odkryj najlepsze miejsca do odwiedzenia podczas pobytu
        w Hotelu Góralski Raj. Czekają na Ciebie niezapomniane wrażenia.')

        {{-- HEADER --}}
        <x-slot name='header'>
            <x-Header title="Lokalne atrakcje" bgi="{{ asset('assets/img/view.jpeg') }}" />
        </x-slot>

        {{-- MAIN --}}

        <section class="section max-w-screen-2xl px-6 md:px-12">

            <div class="flex flex-col gap-40">


                @foreach ($attractions as $attraction)
                    <div class="grid lg:grid-cols-2 gap-12">
                        <div class=" relative  flex flex-col gap-6 justify-center text-center lg:text-left">
                            <h2 class="font-heading text-7xl">{{ $attraction['title'] }}</h2>
                            <p class=" text">{!! $attraction['description'] !!}</p>

                        </div>
                        @foreach ($attraction['images'] as $img)
                            <div class=" w-full md:w-3/4 lg:w-full max-h-[500px] mx-auto overflow-hidden ">
                                <img src=" {{ asset('/storage' . $img) }}" alt="{{ $attraction['title'] }}" loading="lazy"
                                    width="630" height="500"
                                    class="w-full h-full object-cover hover:scale-110 duration-500">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>


    </x-layouts.Main>
