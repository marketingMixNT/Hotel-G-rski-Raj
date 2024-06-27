@props(['advantage'])

<div
    class="relative w-full  min-h-[800px] max-h-[800px] sm:min-h-[900px] sm:max-h-[900px] lg:max-h-[600px] lg:min-h-[600px] 2xl:max-h-[700px] 2xl:min-h-[700px] max:max-h-[800px] max:min-h-[800px] swiper-slide">
    <img src="{{ asset('/storage/' . $advantage->thumbnail) }}" alt="{{ $advantage->title }}" width="1692" height="700"
        loading='lazy' class="absolute h-full w-full object-cover object-center">
    <div
        class="absolute top-[40%] md:top-[60%] lg:top-[50%] 2xl:top-[60%] left-0 bottom-0 lg:right-[30%] max:right-[50%] flex flex-col justify-start items-start gap-6 px-5 md:px-20 pt-10 bg-primary-400 z-50">
        <h2 class="font-heading text-4xl font-bold">{{ $advantage->title }}</h2>
        <p class="text-base md:text-lg ">
            {!! $advantage->description !!}
        </p>
        {{-- NAVIGATE --}}
        
        <nav class=" absolute right-0 bottom-0 flex gap-2">
            <x-ui.button-navigate-prev class="advantages-prev" />
            <x-ui.button-navigate-next class="advantages-next" />
        </nav>
    </div>
</div>
