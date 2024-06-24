@props(['advantage'])

<div
class="swiper-slide min-h-[1000px] max-h-[1000px] sm:min-h-[900px] sm:max-h-[900px] lg:max-h-[600px] lg:min-h-[600px] 2xl:max-h-[700px] 2xl:min-h-[700px] max:max-h-[800px] max:min-h-[800px]  w-full relative">
<img src="{{ asset('/storage/' . $advantage->thumbnail) }}" alt="{{$advantage->title}}" width="1692" height="700" loading='lazy'
    class="absolute h-full w-full object-cover object-top lg:object-center">
<div
    class=" bg-white absolute z-50 left-0  top-[50%] md:top-[60%] lg:top-[50%] 2xl:top-[60%] bottom-0  lg:right-[30%]  max:right-[50%]   px-5 md:px-20 pt-10 flex flex-col justify-start items-start gap-6">
    <h2 class="font-heading text-4xl font-bold">{{ $advantage->title }}</h2>
    <p class="text-base md:text-lg ">
        {!! $advantage->description !!}
    </p>
    <div class=" absolute right-0 bottom-0 flex gap-2">

        <button
            class="advantages-prev bg-secondary-400 hover:bg-third-400 duration-500  p-3"><img
                src="{{ asset('assets/icons/arrow-left.svg') }}" alt=""
                class="w-8"></button>
        <button
            class="advantages-next bg-secondary-400 hover:bg-third-400  duration-500 p-3"><img
                src="{{ asset('assets/icons/arrow-right.svg') }}" alt=""
                class="w-8"></button>
    </div>
</div>
</div>