<header
    class="relative flex flex-col justify-center items-center h-[calc(80vh-84px)]  lg:h-[calc(80vh-84px)]  sm:mt-0 w-full bg-cover bg-center bg-fixed bg-gray-400 bg-blend-multiply text-fontLight " style="background-image: url('{{$bgi}}')"
    >
    <!--HEADING-->
    <span class="mb-4 font-text text-sm 2xl:text-base font-semibold tracking-widest uppercase heading-animation">Zajazd
        Śleboda</span>
    <h1
        class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl 2xl:text-8xl tracking-wider uppercase font-heading font-bold heading-animation">
        {{$title}}
    </h1>
    {{$slot}}
    

</header>