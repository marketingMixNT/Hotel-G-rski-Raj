<section id="o-nas" class="py-36">

    <div class="text-center pb-24">

        <x-Heading title="Co Mówią Nasi Goście" subtitle="Poznaj Doświadczenia i Recenzje Naszych Klientów "
            colorSubtitle='text-fontPrimary' />
    </div>

    {{-- container --}}
    <div class="max-w-screen-xl mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

        <div class="swiper testimonial-carousel">
            <div class="swiper-wrapper ">
                @foreach ($testimonials as $testimonial)
                <div class="swiper-slide flex flex-col justify-center items-center text-center gap-12">

                    <h2 class="text-3xl font-bold">{{$testimonial['name']}}</h2>
                    <p>{{$testimonial['content']}}</p>
                    <span>{{$testimonial['source']}}</span>
                </div>
                    {{-- <div class="flex flex-col justify-between items-center swiper-slide group h-full">
                        <a href="#" class="flex flex-col relative group h-full">
                            <div class="bg-white h-[350px] shadow-2xl">
                                <img src="{{ $offer['thumbnail'] }}" alt="{{ $offer['title'] }}"
                                    class="w-full h-full object-cover p-4">
                            </div>
                            <div class="flex flex-col justify-between items-center gap-4 py-8 flex-grow">
                                <span class="font-light">od <span
                                        class="text-3xl mx-2 text-fontPrimary font-bold">{{ $offer['price'] }}zł</span>
                                    za noc</span>
                                <div class="min-h-[100px] flex justify-center items-center">

                                    <h2 class="font-semibold text-2xl font-heading text-center">{{ $offer['title'] }}
                                    </h2>
                                </div>
                            </div>

                            <div
                                class="bg-white absolute left-0 right-0 top-0 bottom-4 p-4 shadow-xl opacity-0 group-hover:opacity-100 duration-500">
                                <div
                                    class="flex flex-col justify-between items-center text-center bg-gray-200 h-full px-6 py-12">
                                    <span class="font-light">od <span
                                            class="text-3xl mx-2 text-fontPrimary font-bold">{{ $offer['price'] }}zł</span>
                                        za noc</span>
                                    <h2 class="font-semibold text-2xl font-heading">{{ $offer['title'] }}</h2>
                                    <p>{{ $offer['description'] }}</p>
                                    <hr class="border border-gray-400 w-12 ">
                                    <div class="flex flex-col self-start gap-4">

                                        <div class="flex gap-3 self-start">
                                            <img src="{{ asset('icons/clock.svg') }}" alt="" class="w-4">
                                            <span class="text-sm">min.
                                                {{ $offer['nights'] }} noce</span>
                                        </div>
                                        <div class="flex gap-3 self-start">
                                            <img src="{{ asset('icons/fork.svg') }}" alt="" class="w-4">
                                            <span class="text-sm">{{ $offer['food'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="flex justify-center items-center mt-2 mb-6 w-full">
                            <a href="#"
                                class="px-16 py-4 shadow-xl group-hover:bg-black group-hover:text-white duration-500">Zobacz
                                szczegóły</a>
                        </div>
                    </div> --}}
                @endforeach
            </div>

            {{-- <div class="flex justify-center items-center mt-16 gap-6">

                <button class="offer-prev bg-secondary-400 hover:bg-third-400 duration-500  p-3 "><img
                        src="{{ asset('assets/icons/arrow-left.svg') }}" alt="" class="w-7"></button>
                <a href="#" class="bg-third-400 py-4 px-12 hover:bg-black duration-500 ">Zobacz wszystkie</a>
                <button class="offer-next bg-secondary-400 hover:bg-third-400  duration-500 p-3"><img
                        src="{{ asset('assets/icons/arrow-right.svg') }}" alt="" class="w-7"></button>
            </div> --}}
        </div>


    </div>

</section>
