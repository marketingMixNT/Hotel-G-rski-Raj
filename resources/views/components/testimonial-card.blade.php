@props(['testimonial'])

<div class="swiper-slide">
    <div class="flex flex-col justify-center items-center text-center gap-12">
        <div>
            <h2 class="text-5xl font-semibold font-heading mb01">{{ $testimonial->name }}</h2>
            <span class="font-handwritting text-2xl"> {{ $testimonial->source }}</span>
        </div>
        <hr class="border border-black w-24">

        <p class=" text text-lg">{{ $testimonial->content }}</p>
    </div>
    </div>