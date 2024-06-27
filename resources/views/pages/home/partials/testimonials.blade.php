{{-- js/partials/swiper --}}
<section class="section px-6 md:px-12">

    {{-- HEADING --}}
    <x-heading-container>
        <x-heading subtitle="Poznaj doświadczenia i recenzje naszych klientów " title="Co Mówią Nasi Goście"  />
    </x-heading-container>

    {{-- CONTENT --}}
    <div class="max-w-screen-lg mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

        <div class="swiper testimonial-carousel">
            <div class="swiper-wrapper ">
                @foreach ($testimonials as $testimonial)
                    <x-testimonial-card :testimonial="$testimonial"/>
                @endforeach

            </div>


        </div>


    </div>

</section>
