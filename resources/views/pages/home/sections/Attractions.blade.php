<section  class="section px-6 md:px-12">

    <!--heading-->
    <div class="w-full mx-auto flex justify-center items-center">
       <x-Heading-Horizontal subheading="Hotel Góralski Raj" heading="Pokoje Pełne Górskiego Uroku"
           decor="Komfort i spokój na każdą porę roku"
           text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />
   </div>


   {{-- container --}}
   <div class="flex flex-col gap-20 lg:gap-32 max-w-screen-xl mx-auto">
       {{-- attraction box --}}
       @foreach ($attractions as $index => $attraction)
           <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
               {{-- image --}}
               <div class="{{ $index % 2 === 0 ? 'lg:order-1' : '' }} w-full lg:w-1/2 flex justify-center items-center">
                   <img src="{{ asset('/storage/' .$attraction['thumbnail']) }}" alt="{{ $attraction['title'] }}" class=" object-cover w-full h-[400px]">
               </div>
               {{-- text --}}
               <div class="w-full lg:w-1/2 flex flex-col justify-evenly items-start gap-4 lg:gap-0">
                   <h2 class="text-4xl font-bold">{{ $attraction['title'] }}</h2>
                   <p>{!! $attraction['description'] !!}</p>
               
               </div>
           </div>
       @endforeach


   </div>
   <div class="flex justify-center items-center mt-12 lg:mt-24">

       <x-ui.link-button type='secondary' href=''>Zobacz wszystkie</x-ui.link-button>
   </div>
</section>