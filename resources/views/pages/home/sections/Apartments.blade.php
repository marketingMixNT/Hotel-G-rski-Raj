<section id="o-nas" class="py-36">

    <div class="text-center pb-24">

        <x-Heading title="Apartamenty" subtitle="Lista Apartamentów"
            colorSubtitle='text-fontPrimary' />
    </div>


        <div class="max-w-screen-2xl mx-auto">
            @foreach ($apartments as $apartment)
            <x-ApartmentCard 
            name="{{ $apartment['name'] }}" 
            img="{{ asset('/storage/' . $apartment['gallery'][0]) }}"
            shortDesc="{!! $apartment['short_desc']!!}" 
            surface="{{ $apartment['surface'] }}"
            person="{{ $apartment['person'] }}" 
            beds="{{ $apartment['beds'] }}" 
            link="{{ route('apartment', $apartment['slug']) }}"
            reservationLink="{{ $apartment['reservationLink'] }}"
            />
        @endforeach
        </div>
    


</section>