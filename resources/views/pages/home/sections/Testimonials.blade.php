<section class="section px-6 md:px-12">

    <div class="text-center pb-24">

        <x-Heading title="Co Mówią Nasi Goście" subtitle="Poznaj Doświadczenia i Recenzje Naszych Klientów " />
    </div>

    {{-- container --}}
    <div class="max-w-screen-lg mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

        <div class="swiper testimonial-carousel">
            <div class="swiper-wrapper ">
                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide flex flex-col justify-center items-center text-center gap-12">


                        <div>
                            <h2 class="text-5xl font-semibold font-heading">{{ $testimonial['name'] }}</h2>
                            <span class="font-handwritting text-2xl"> {{ $testimonial['source'] }}</span>
                        </div>
                        <hr class="border border-black w-24">

                        <p class="text-lg">{{ $testimonial['content'] }}</p>
                    </div>
                @endforeach
            </div>


        </div>


    </div>

</section>
