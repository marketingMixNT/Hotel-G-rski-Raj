<x-layouts.app>

    {{-- META --}}
    @section('title', $offer->meta_title)
    @section('description', $offer->meta_desc)

    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="{{ $offer->title }}" bgi="{{ asset('/storage' . $offer->banner_img) }}">
            <x-shared.booking-panel />
        </x-shared.header>
    </x-slot>

    {{-- MAIN --}}
    <section class="section px-6 md:px-12 max-w-screen-2xl">

        {{-- top --}}
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-0">

            <div class="flex flex-col  justify-center items-center  gap-4 w-full lg:w-[60%]">
                <p class="text">Oferta ważna od <span
                        class="font-semibold">{{ $offer->start_date->format('d-m-Y') }}</span>
                    do <span class="font-semibold">{{ $offer->end_date->format('d-m-Y') }} </span></p>
                <div class="flex flex-wrap justify-center items-center gap-12">
                    <div class="border border-gray-400 px-8 py-2 flex gap-2 justify-start items-center"><img
                            src="{{ asset('assets/icons/moon.svg') }}" alt="" class="w-7"><span
                            class="text-sm mt-1">min. {{ $offer->nights }} noce</span></div>
                    <div class="border border-gray-400 px-8 py-2 flex gap-2 justify-start items-center"><img
                            src="{{ asset('assets/icons/dish.svg') }}" alt="" class="w-7"><span
                            class="text-sm mt-1">{{ $offer->food }}</span></div>
                </div>
            </div>
            <div class="w-full lg:w-[40%] text-center lg:text-left">
                {!! $offer->short_desc !!}
            </div>
        </div>
        {{-- content --}}
        <div class="flex flex-col lg:flex-row mt-16 lg:mt-32">

            <div class="w-full lg:w-[60%] lg:pr-20 description order-1 lg:order-none">{!! $offer->description !!} </div>


            <div class="w-full lg:w-[40%] relative "><img src="{{ asset('/storage' . $offer->thumbnail) }}" alt=""
                    class="sticky top-32"></div>
        </div>
    </section>

    {{-- OTHER OFFERS --}}
    <section class="section max-w-screen-2xl px-6 md:px-12 mb-16">

        <x-offers-carousel>
            @foreach ($otherOffers as $offer)
                <x-offer-carousel-card :offer="$offer" />
            @endforeach
        </x-offers-carousel>

    </section>

</x-layouts.app>
