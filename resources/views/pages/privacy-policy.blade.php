<x-layouts.app>

    {{-- META --}}
    @section('title', 'Polityka Prywatności | Hotel Góralski Raj')
    @section('description', 'Zapoznaj się z Polityką Prywatności Hotelu Góralski Raj i dowiedz się, jak chronimy Twoje dane osobowe. Twoja prywatność jest dla nas priorytetem.')

    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="Polityka Prywatności" bgi="{{ asset('assets/img/view.jpeg') }}">
        </x-shared.header>
    </x-slot>

    {{-- MAIN --}}
    <section class="section px-6 md:px-12 max-w-screen-2xl content">
        {!! $privacyPolicy->content !!}
    </section>
    

</x-layouts.Main>
