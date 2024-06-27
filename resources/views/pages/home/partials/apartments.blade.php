<x-section>

    {{-- HEADING --}}
    <x-heading-container>
        <x-heading subtitle="Komfort i luksus w każdym szczególe" title="Idealne Miejsce na Pobyt w Tatrach" />
    </x-heading-container>

    {{-- CONTENT --}}
    <div class="max-w-screen-2xl mx-auto">
        @foreach ($apartments as $apartment)
            <x-apartment-card :apartment='$apartment' />
        @endforeach
    </div>
</x-section>
