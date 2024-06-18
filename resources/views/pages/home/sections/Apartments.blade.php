<section id="o-nas" class="py-36">

    <div class="text-center pb-24">

        <x-Heading title="Apartamenty" subtitle="Lista Apartamentów"
            colorSubtitle='text-fontPrimary' />
    </div>



    {{-- <div class="swiper apartments-carousel ">
        <div class="swiper-wrapper">
            @foreach ($apartments as $apartment)
            <div class="swiper-slide border border-black flex flex-col justify-center items-center">
                <div class="w-full">

                    <img src="{{asset($apartment['gallery'][0])}}" alt="" class="w-full">
                </div>
                <h2 class="bold text-3xl">{{$apartment['name']}}</h2>
            </div>
            @endforeach
            
            
        </div> --}}


        <div class="max-w-screen-2xl mx-auto">
            @foreach ($apartments as $apartment)
            <div class="  border-black flex justify-between items-center border-b py-16 gap-12">
                <div class="w-[30%]">

                    <img src="{{asset('/storage'.$apartment['gallery'][0])}}" alt="" class="w-full h-[400px]">
                </div>
                <div class="w-1/2 flex flex-col justify-center items-start gap-6">

                    <h2 class="bold text-3xl">{{$apartment['name']}}</h2>
                    <p>{!!$apartment['short_desc']!!}</p>
                    <div class="flex gap-12">
                        <div>
                            <img src="" alt=""> <span>{{$apartment['surface']}} m²</span>
                        </div>
                        <div>
                            <img src="" alt=""> <span>max {{$apartment['person']}} </span>
                        </div>
                        <div>
                            <img src="" alt=""> <span>{{$apartment['beds']}} </span>
                        </div>
                    </div>
                </div>
                <div class="w-[10%] flex gap-2 flex-col">
                    <a href="">Zobacz</a>
                    <a href="">Zarezerwuj</a>
                </div>
            </div>
            @endforeach
        </div>
    


</section>