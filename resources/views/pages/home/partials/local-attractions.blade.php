<x-section >

    <!--heading-->
    <div class="w-full mx-auto flex justify-center items-center">
       <x-heading-horizontal subtitle="Magiczne Miejsca Blisko Nas" title="Atrakcje, Które Musisz Zobaczyć"
           decor="Przeżyj Niezapomniane Chwile Blisko Naszego Hotelu"
           text="Zapraszamy do odkrycia okolicznych atrakcji, które czekają na Ciebie w sercu Tatr. Niezależnie od tego, czy jesteś miłośnikiem przyrody, kultury czy aktywnego wypoczynku, znajdziesz tu coś dla siebie. Malownicze szlaki, historyczne miejsca i lokalne skarby czekają na Twoje odkrycie. Przeżyj niezapomniane chwile i doświadcz piękna okolicznych krajobrazów podczas pobytu w Hotelu Góralski Raj!" />
   </div>


   {{-- container --}}
   <div class="flex flex-col gap-20 lg:gap-32 max-w-screen-xl mx-auto">
       {{-- attraction box --}}
       @foreach ($attractions as $index => $attraction)
           <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
               {{-- image --}}
               <div class="{{ $index % 2 === 0 ? 'lg:order-1' : '' }} w-full lg:w-1/2 flex justify-center items-center">
                   <img src="{{ asset('/storage/' .$attraction['thumbnail']) }}" alt="{{ $attraction['title'] }}" class=" object-cover w-full h-[350px]">
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

    <x-ui.link-button--large href="{{ route('local-attractions.index') }}">Zobacz wszystkie</x-ui.link-button--large>
</div>
</x-section>