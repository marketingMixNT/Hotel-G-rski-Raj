   @props(['apartment'])
   
   {{-- container --}}
    <div
        class="  border-gray-400 flex flex-col lg:flex-row justify-between  border-b py-16 gap-4 lg:gap-12  last-of-type:border-none group">
        {{-- image --}}
        <div class="w-full lg:w-[30%]">
            <div class="overflow-hidden">

                <img src=" {{asset('/storage/' . $apartment->thumbnail ) }}"
                    alt="Zdjęcie apartamentu {{ $apartment->name }} w hotelu Góralski Raj w Nowym Targu" width="460"
                    height="380" class="w-full h-[350px] object-cover group-hover:scale-105 duration-500">
            </div>
        </div>
        {{-- content --}}
        <div class="w-full lg:w-[45%] flex flex-col justify-between items-start py-8 gap-8 lg:gap-0">

            <h2 class="bold text-4xl uppercase  font-heading">{{ $apartment->name }}</h2>
            <div class="text 2xl:mr-24">{!! $apartment->short_desc !!}</div>

            <ul class="flex flex-wrap gap-12">
                <li class="flex justify-center items-center gap-3">
                    <img src="{{ asset('assets/icons/surface.svg') }}" alt="" class="w-8">
                    <span class="text-lg font-text pt-2">{{ $apartment->surface }} m²</span>
                </li>
                <li class="flex justify-center items-center gap-3">
                    <img src="{{ asset('assets/icons/users.svg') }}" alt="" class="w-8"> <span
                        class="text-lg font-text pt-2">max
                        {{ $apartment->person }} </span>
                </li>
                <li class="flex justify-center items-center gap-3">
                    <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-8">
                    <span class="text-lg font-text pt-2">{{ $apartment->beds }} </span>
                </li>
            </ul>

        </div>
        {{-- actions --}}
        <div class="w-full lg:w-[15%] flex justify-center items-start gap-6 flex-col">

            <x-ui.link-arrow href="{{ route('apartment', $apartment->slug) }}">Zobacz</x-ui.link-arrow>
            <x-ui.link-button type='secondary' href='{{ $apartment->reservationLink }}'>Zarezerwuj</x-ui.link-button>





        </div>
    </div>
