<x-layouts.app>

    @section('title', 'Kontakt | Hotel Góralski Raj')
    @section('description',
        'Skontaktuj się z nami! Znajdź dane kontaktowe Hotelu Góralski Raj, w tym numer telefonu, adres e-mail oraz formularz kontaktowy. Jesteśmy tu, aby odpowiedzieć na Twoje pytania.')

<x-slot name='header'>
    <x-shared.header title="Kontakt" bgi="{{ asset('assets/img/view.webp') }}">

        <x-shared.booking-panel/>
    </x-shared.header>

</x-slot>


        <!--CONTAINER-->
        <section>

            <div class=" max-w-screen-2xl px-12 mt-24 mx-auto text-center">
                <!--HEADING-->
                <x-heading subtitle="Hotel Górski Raj" title="Czekamy na Twoją wiadomość"
                    decor="Nawiąż Kontakt i Zacznij Swoją Przygodę" />
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 mt-24">

                    @include('pages.contact.partials.contact-area')

                    

                    <livewire:contact-form/>

        </section>

        <!--SWIPER-->
    <div class="grid grid-cols-1 md:grid-cols-12  gap-6 mt-12 mb-32">

        @for ($i = 0; $i < 4 && $i < count($gallery); $i++)
            <x-image-photo class="h-[400px] p-4 {{ $i % 2 == 0 ? 'col-span-4' : 'col-span-2' }}">
                <a href="{{ asset('/storage/' . $gallery[$i]->image) }}" class="glightbox">
                    <img src="{{ asset('/storage/' . $gallery[$i]->image) }}" alt="{{ $gallery[$i]->alt }}" width="548"
                        height="368" loading="lazy" class="w-full h-full object-cover">
                </a>
            </x-image-photo>
        @endfor
       
    </div>


    </x-layouts.master>