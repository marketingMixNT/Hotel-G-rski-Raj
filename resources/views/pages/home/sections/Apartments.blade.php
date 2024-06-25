<section  class="section px-6 md:px-12">

    <div class="text-center pb-24">

        <x-heading subtitle="Komfort i luksus w każdym szczególe" title="Idealne Miejsce na Pobyt w Tatrach" 
             />
    </div>


        <div class="max-w-screen-2xl mx-auto">
            @foreach ($apartments as $apartment)
            <x-apartment-card 
            :apartment='$apartment'
            />
        @endforeach
        </div>
    


</section>