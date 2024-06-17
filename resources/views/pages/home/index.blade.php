<x-layouts.Main>

    <x-slot name='header'>
        @include('pages.home.sections.HeroSlider')
    </x-slot>

    @include('pages.home.sections.About')
    @include('pages.home.sections.RecomendedPages')
    @include('pages.home.sections.Offers')
    @include('pages.home.sections.Apartments')
    @include('pages.home.sections.Gallery')
    @include('pages.home.sections.Testimonials')
    @include('pages.home.sections.Attractions')
   
    <x-Map/>


</x-layouts.Main>