{{-- @props(['colorTitle'=>'','colorSubtitle'=>'','title'=>'','subtitle'=>''])


<h2 class="font-heading text-7xl font-medium leading-tight tracking-wide {{$colorTitle}}">{{$title}}</h2>
<h3 class="font-handwritting text-3xl font-normal leading-tight tracking-wide mt-1 {{$colorSubtitle}}">{{$subtitle}}</h3> --}}



<div class="text-center inline-block">
    <span class="font-text text-sm 2xl:text-base font-base tracking-widest uppercase  heading-animation ">
        {{ $subheading }}
    </span>
    <h2 class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl 2xl:text-8xl tracking-wider font-heading font-bold  ">
        {{ $heading }}
    </h2>
    <h3 class="font-handwriting text-right text-2xl mt-2 md:opacity-0 decorText-animation ">
        {{ $decor }}
    </h3>
</div>