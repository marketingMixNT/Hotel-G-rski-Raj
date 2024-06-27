<x-layouts.app>

 {{-- META --}}
 @section('title', 'Hotel Góralski Raj - Luksusowe Zakwaterowanie w Sercu Tatr')
 @section('description', 'Hotel Góralski Raj oferuje luksusowe apartamenty, wyśmienitą kuchnię i relaks w ekskluzywnym SPA. Odkryj wyjątkowy komfort i piękno Tatr.')

    <x-slot name='header'>
        @include('pages.home.partials.hero-slider')
    </x-slot>

    @include('pages.home.partials.about')
    @include('pages.home.partials.hotel-attractions')
    @include('pages.home.partials.offers')
    @include('pages.home.partials.apartments')
    @include('pages.home.partials.testimonials')
    @include('pages.home.partials.gallery')
    @include('pages.home.partials.local-attractions')
   
    <x-shared.map/>


   
    

</x-layouts.app>