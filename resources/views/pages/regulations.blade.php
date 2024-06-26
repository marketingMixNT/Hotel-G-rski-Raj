<x-layouts.app>

    {{-- META --}}
    @section('title', 'Regulamin | Hotel Góralski Raj')
    @section('description', 'Przeczytaj regulamin Hotelu Góralski Raj, aby dowiedzieć się o naszych zasadach i warunkach rezerwacji, pobytu oraz korzystania z naszych usług. Twoje bezpieczeństwo i wygoda są dla nas najważniejsze.')

    {{-- HEADER --}}
    <x-slot name='header'>
        <x-shared.header title="Regulamin" bgi="{{ asset('assets/img/view.jpeg') }}">
        </x-shared.header>
    </x-slot>

    {{-- MAIN --}}
    <section class="section px-6 md:px-12 max-w-screen-2xl content">
        {!! $regulations->content !!}
    </section>
    

</x-layouts.Main>
