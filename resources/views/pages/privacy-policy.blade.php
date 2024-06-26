<x-layouts.app>

    {{-- META --}}
    @section('title', 'dsa')
    @section('description', 'asd')

    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="Polityka Prywatności" bgi="{{ asset('assets/img/view.jpeg') }}">
            <x-shared.booking-panel />
        </x-shared.header>
    </x-slot>

    {{-- MAIN --}}
    <section class="section px-6 md:px-12 max-w-screen-2xl content">
        {!! $privacyPolicy->content !!}
    </section>
    

</x-layouts.Main>
