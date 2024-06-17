<section id="o-nas" class="py-36">

    <div class="text-center pb-24">

        <x-Heading title="Niezapomniane Chwile w Sercu Tatr" subtitle="Odkryj Różnorodność Aktywności i Wrażeń"
            colorSubtitle='text-fontPrimary' />
    </div>


    {{-- container --}}
    <div class="flex flex-col gap-32 max-w-screen-xl mx-auto">
        {{-- attraction box --}}
        @foreach ($attractions as $index => $attraction)
            <div class="flex gap-20">
                {{-- image --}}
                <div class="{{ $index % 2 === 0 ? 'order-1' : '' }} w-1/2 flex justify-center items-center">
                    <img src="{{ asset($attraction['images'][0]) }}" alt="{{ $attraction['title'] }}" class=" object-cover w-full h-[500px]">
                </div>
                {{-- text --}}
                <div class="w-1/2 flex flex-col justify-evenly items-start">
                    <h2 class="text-4xl font-bold">{{ $attraction['title'] }}</h2>
                    <p>{!! $attraction['description'] !!}</p>
                    <a href="#">Dowiedz się więcej</a>
                </div>
            </div>
        @endforeach


    </div>

</section>
