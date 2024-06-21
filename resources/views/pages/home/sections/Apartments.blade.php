<section  class="section px-6 md:px-12">

    <div class="text-center pb-24">

        <x-Heading title="Apartamenty" subtitle="Lista Apartamentów"
            colorSubtitle='text-fontPrimary' />
    </div>


        <div class="max-w-screen-2xl mx-auto">
            @foreach ($apartments as $apartment)
            <x-ApartmentCard 
            :apartment='$apartment'
            />
        @endforeach
        </div>
    


</section>