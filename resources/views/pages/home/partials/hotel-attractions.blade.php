{{-- <section class="section h-[90vh] grid grid-cols-2 gap-6 "> --}}
<x-section fullWidth='true' class="h-[90vh] grid grid-cols-2 gap-4">
{{-- MAIN --}}

    <x-recommended-page class="col-span-2  bg-[url('/public/assets/img/restaurant.webp')] bg-bottom" link="{{route('hotel-attraction.show','restauracja')}}" text="Poznaj naszą restaurację">
        <x-heading smaller="true" subtitle="Smak, styl, i sztuka" title="Kuchnia Pełna Inspiracji" 
            colorTitle="text-white" colorSubtitle='textwhite group-hover:text-fontPrimary duration-500' />
    </x-recommended-page>

    {{-- SECOND and THIRD --}}

    <x-recommended-page class="col-span-2 lg:col-span-1 bg-[url('/public/assets/img/spa.webp')] bg-center" link="{{route('hotel-attraction.show','spa')}}" text="Poznaj nasze SPA">
        <x-heading smaller="true" subtitle="Renowacja i relaks w naszym SPA" title="Odkryj Pełnię Spokoju" 
            colorTitle="text-white" colorSubtitle='textwhite group-hover:text-fontPrimary duration-500' />
    </x-recommended-page>

    <x-recommended-page class="col-span-2 lg:col-span-1 bg-[url('/public/assets/img/pool.webp')] bg-center" link="{{route('hotel-attraction.show','basen')}}" text="Poznaj nasz basen">
        <x-heading smaller="true" subtitle="Twoje miejsce na odnowę i radość" title="Woda i Relaks" 
            colorTitle="text-white" colorSubtitle='textwhite group-hover:text-fontPrimary duration-500' />
    </x-recommended-page>

</x-section>
     

{{-- </section> --}}
