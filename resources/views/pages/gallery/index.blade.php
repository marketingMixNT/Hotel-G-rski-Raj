<x-layouts.app>

    @section('title', 'Galeria | Hotel Góralski Raj - Zobacz Nasz Hotel i Okolicę')
    @section('description',
        'Zapraszamy do obejrzenia galerii Hotelu Góralski Raj. Zobacz piękne zdjęcia naszego hotelu, luksusowych apartamentów, wyjątkowych atrakcji i malowniczych okolic Tatr.')

<x-slot name='header'>
    <x-shared.header title="Galeria" bgi="{{ asset('assets/img/gallery.webp') }}">

        <x-shared.booking-panel/>
    </x-shared.header>

</x-slot>

<div class="max-w-screen-2xl mx-auto my-28">

    <livewire:gallery-images/>
    
</div>


    </x-layouts.master>