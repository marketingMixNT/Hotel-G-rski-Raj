@props(['smaller' => false, 'subtitle', 'title'])

<div class="inline-block text-center ">
    <span class="text-lg md:text-xl 2xl:text-2xl font-light tracking-widest heading-animation font-handwritting ">
        {{ $subtitle }}
    </span>
    <h2
        class="text-center text-3xl xs:text-4xl sm:text-6xl  {{ $smaller ? 'max:text-8xl' : 'md:text-7xl 2xl:text-8xl' }} tracking-wider font-heading font-bold  ">
        {{ $title }}
    </h2>

</div>
