<x-layouts.app>

    @section('title', 'Skontaktuj się z nami: Zajazd Śleboda')
    @section('description',
        'Skontaktuj się z Zajazdem Śleboda, by zarezerwować pobyt lub uzyskać więcej informacji.
        Jesteśmy tu, by zapewnić Ci niezapomniany wypoczynek w Tatrach.')

<x-slot name='header'>
    <x-shared.header title="Wszystkie apartamenty" bgi="{{ asset('assets/img/view.jpeg') }}">

        <x-shared.booking-panel/>
    </x-shared.header>

</x-slot>


        <!--CONTAINER-->
        <section>

            <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
                <!--HEADING-->
                <x-heading subtitle="Zajazd Śleboda" title="Czekamy na Twoją wiadomość"
                    decor="Nawiąż Kontakt i Zacznij Swoją Przygodę" />
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24">

                    @include('pages.contact.partials.contact-area')
                    
                    {{-- @include('pages.contact.partials.form') --}}

                    <livewire:contact-form/>

        </section>

        <!--SWIPER-->
        <section id="contact_swiper" class="mb-24">
            <contact-swiper></contact-swiper>
        </section>




    </x-layouts.master>