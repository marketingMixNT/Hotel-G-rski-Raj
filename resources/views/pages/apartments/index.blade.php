<x-layouts.Main>

    <x-slot name='header'>
        <x-Header title="Wszystkie apartamenty" bgi="red" />

    </x-slot>




    <div class="max-w-screen-2xl mx-auto">

        <x-Heading-Horizontal subheading="Zajazd Śleboda" heading="Pokoje Pełne Górskiego Uroku"
            decor="Komfort i spokój na każdą porę roku"
            text="Nasze pokoje to więcej niż miejsce noclegowe; to przestrzeń, gdzie każdy detal odzwierciedla piękno i spokój otaczających nas Tatr. Wybierając nocleg u nas, wybierasz komfort, wygodę i niezapomniane widoki, które sprawią, że Twój wypoczynek będzie wyjątkowy. Czy to romantyczny weekend, rodzinne wakacje, czy wypad ze znajomymi - znajdziesz u nas pokój idealnie dopasowany do Twoich potrzeb i oczekiwań." />

        @foreach ($apartments as $apartment)
            <div class="  border-black flex justify-between items-center border-b py-16 gap-12">
                <div class="w-[30%]">

                    <img src=" {{ asset('/storage/' . $apartment['gallery'][0]) }}" alt=""
                        class="w-full h-[400px] object-cover">
                </div>
                <div class="w-1/2 flex flex-col justify-center items-start gap-6">

                    <h2 class="bold text-3xl">{{ $apartment['name'] }}</h2>
                    <p>{!! $apartment['short_desc'] !!}</p>
                    <div class="flex gap-12">
                        <div class="flex justify-center items-center gap-3">
                            <img src="{{asset('assets/icons/surface.svg')}}" alt="" class="w-5"> <span>{{ $apartment['surface'] }} m²</span>
                        </div>
                        <div class="flex justify-center items-center gap-3">
                            <img src="{{asset('assets/icons/users.svg')}}" alt="" class="w-5"> <span>max {{ $apartment['person'] }} </span>
                        </div>
                        <div class="flex justify-center items-center gap-3">
                            <img src="{{asset('assets/icons/bed.svg')}}" alt="" class="w-5"> <span>{{ $apartment['beds'] }} </span>
                        </div>
                    </div>
                </div>
                <div class="w-[10%] flex gap-2 flex-col">
                    <a href="{{route('apartment',$apartment['name'])}}">Zobacz</a>
                    <a href="">Zarezerwuj</a>
                </div>
            </div>
        @endforeach


</x-layouts.Main>
