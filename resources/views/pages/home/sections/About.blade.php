<section id="o-nas" class="pt-36 py-36">

    <div class="text-center pb-24">
        
        <x-Heading title="Piękne miejsce w Tatrach" subtitle="Intymna atmosfera i najwyzszy komfort w harmonii z dzika natura" colorSubtitle='text-fontPrimary'/>
    </div>    
    
    
    <div class="px-6 md:px-12 2xl:px-32 mx-auto relative">
    
        <div class="swiper advantages-carousel shadow-lg">
            <div class="swiper-wrapper ">
                @foreach ($advantages as $advantage)
                <div class="swiper-slide min-h-[800px] max-h-[800px] lg:max-h-[600px] lg:min-h-[600px] 2xl:max-h-[800px] 2xl:min-h-[800px]  w-full relative">
                    <img src="{{asset('/storage' . $advantage['thumbnail'])}}" alt="" class="absolute h-full w-full object-cover object-top lg:object-center">
                    <div class=" bg-white absolute z-50 left-0  top-[50%] md:top-[60%] lg:top-[50%] 2xl:top-[60%] bottom-0  lg:right-[30%] xl:right-[50%] max:right-[60%]   px-5 md:px-20 pt-10 flex flex-col justify-start items-start gap-6">
                       <h2 class="font-heading text-4xl font-bold">{{$advantage['title']}}</h2>
                       <p class="text-base md:text-lg ">
                        {!!$advantage['description']!!}
                       </p>
                       <div class=" absolute right-0 bottom-0 flex gap-2">
    
                          
                           <button class="advantages-prev bg-secondary-400 hover:bg-third-400 duration-500  p-3"><img src="{{asset('assets/icons/arrow-left.svg')}}" alt="" class="w-8"></button>
                           <button class="advantages-next bg-secondary-400 hover:bg-third-400  duration-500 p-3"><img src="{{asset('assets/icons/arrow-right.svg')}}" alt="" class="w-8"></button>
                        </div>
                        </div>
                </div>
                @endforeach
            
            </div>
           
          </div>
         
    
    </div>
    </section>