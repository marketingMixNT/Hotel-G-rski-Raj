<section class="section h-screen grid grid-cols-2 gap-6 ">

{{-- MAIN --}}

    <x-recommended-page class="col-span-2  bg-[url('/public/assets/img/restaurant.jpeg')] bg-bottom" link="{{route('hotelAttraction','restauracja')}}" text="Poznaj naszą restaurację">
        <x-heading subtitle="Smak, styl, i sztuka" title="Kuchnia Pełna Inspiracji" 
            colorTitle="text-white" colorSubtitle='textwhite group-hover:text-fontPrimary duration-500' />
    </x-recommended-page>

    {{-- SECOND and THIRD --}}

    <x-recommended-page class="col-span-2 lg:col-span-1 bg-[url('/public/assets/img/spa.jpeg')] bg-center" link="{{route('hotelAttraction','spa')}}" text="Poznaj nasze SPA">
        <x-heading subtitle="Renowacja i relaks w naszym SPA" title="Odkryj Pełnię Spokoju" 
            colorTitle="text-white" colorSubtitle='textwhite group-hover:text-fontPrimary duration-500' />
    </x-recommended-page>

    <x-recommended-page class="col-span-2 lg:col-span-1 bg-[url('/public/assets/img/pool.jpeg')] bg-center" link="{{route('hotelAttraction','basen')}}" text="Poznaj nasz basen">
        <x-heading subtitle="Twoje miejsce na odnowę i radość" title="Woda i Relaks" 
            colorTitle="text-white" colorSubtitle='textwhite group-hover:text-fontPrimary duration-500' />
    </x-recommended-page>


     

</section>
