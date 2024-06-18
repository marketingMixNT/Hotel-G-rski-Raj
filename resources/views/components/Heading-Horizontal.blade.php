<div class="flex flex-col lg:flex-row justify-center items-center gap-12 lg:gap-24 mb-12 lg:mb-24 max-w-screen-xl ">
    <div class="inline-block lg:w-3/5 ">
        <span class="font-text text-sm 2xl:text-base font-base tracking-widest uppercase heading-animation">
            {{ $subheading }}
        </span>
        <h2 class="text-4xl xs:text-5xl sm:text-6xl md:text-7xl 2xl:text-8xl tracking-wider font-heading font-bold ">
            {{ $heading }}
        </h2>
        <h3 class="font-handwriting text-right text-2xl mt-2  decorText-animation">
            {{ $decor }}
        </h3>
    </div>
    <div class="w-4/5 md:w-3/4 lg:w-2/5">
        <p class="text text-animation">{{ $text }}</p>
    </div>
</div>