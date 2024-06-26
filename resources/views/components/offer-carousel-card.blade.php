{{-- CONTAINER --}}
<div class="flex flex-col justify-between items-center h-full group swiper-slide " >
    <div class="relative flex flex-col justif-center items-center h-full group " onclick="void(0)">
        {{-- FRONT --}}
        {{-- img --}}
        <x-image-photo class="h-[350px] sm:w-[375px] ">
            <img src="{{ asset('/storage' . $offer->thumbnail) }}" alt="{{ $offer['title'] }}" width="548" height="368"
                loading="lazy" class="w-full h-full object-cover ">
        </x-image-photo>
        {{-- title --}}
        <div class="flex flex-col justify-between items-center gap-4 py-8 flex-grow">
            <span class="font-light">od <span
                    class="text-3xl mx-2 text-fontPrimary font-bold">{{ $offer['price'] }}zł</span>
                za noc</span>
            <div class="min-h-[100px] flex justify-center items-center">

                <h2 class="font-semibold text-2xl font-heading text-center">{{ $offer['title'] }}
                </h2>
            </div>
        </div>

        {{-- BACK --}}
        <div
            class="bg-white absolute left-0 right-0 top-0 bottom-4 p-4 shadow-xl opacity-0 group-hover:opacity-100 duration-500">
            <div class="flex flex-col justify-between items-center text-center bg-white h-full px-6 py-12">
                <span class="font-light">od <span
                        class="text-3xl mx-2 text-fontPrimary font-bold">{{ $offer['price'] }}zł</span>
                    za noc</span>
                <h2 class="font-semibold text-2xl font-heading">{{ $offer['title'] }}</h2>
                <p>{!! $offer['short_desc'] !!}</p>
                <hr class="border border-primary-600 w-1/2 ">
                <div class="flex flex-col self-start gap-4">

                    <div class="flex gap-3 self-start">
                        <img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="w-5">
                        <span class="text-sm">min.
                            {{ $offer['nights'] }} noce</span>
                    </div>
                    <div class="flex gap-3 self-start">
                        <img src="{{ asset('assets/icons/fork.svg') }}" alt="" class="w-4">
                        <span class="text-sm">{{ $offer['food'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center mt-2 mb-6 w-full">
        <a href="{{route('offers.show',$offer->slug)}}"
            class="px-16 py-4 shadow-xl group-hover:bg-black group-hover:text-white duration-500 bg-white">Zobacz
            szczegóły</a>
    </div>
</div>
