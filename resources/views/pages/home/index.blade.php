<x-layouts.Main>

    <x-slot name='header'>

        @include('pages.home.sections.HeroSlider')

    </x-slot>


    @include('pages.home.sections.About')
    @include('pages.home.sections.RecomendedPages')
    @include('pages.home.sections.Offers')
    @include('pages.home.sections.Contact')


</x-layouts.Main>