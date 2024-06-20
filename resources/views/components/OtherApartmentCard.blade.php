<div class=" swiper-slide flex flex-col justify-between items-center h-full group">
    {{-- CONTAINER --}}
    <a href="{{ $link }}" class=" relative flex flex-col  h-full group">
        {{-- FRONT --}}
        {{-- img --}}
        <x-ImagePhoto class='h-[400px] p-4'>
            <img src="{{ $thumbnail }}" alt="{{ $name }}" width="548" height="368" loading="lazy"
                class="w-full h-full object-cover">
        </x-ImagePhoto>
        {{-- title --}}
        <div class="flex flex-grow flex-col justify-between items-center gap-4   py-8">

            <div class="flex justify-center items-center min-h-[100px] ">

                <h2 class="text-4xl font-semibold  font-heading text-center">
                    {{ $name }}
                </h2>
            </div>
        </div>

        {{-- BACK --}}
        <div
            class="absolute left-0 right-0 top-0 bottom-4 p-4 bg-primary-400  shadow-lg opacity-0 group-hover:opacity-100 duration-500  ">
            <div class="flex flex-col justify-between items-center  h-full px-6 py-12 text-center bg-primary-400">
                {{-- text --}}
                <h2 class="font-semibold text-4xl font-heading"> {{ $name }}</h2>
                <div class="text">{!! $shortDesc !!}</div>
                <hr class="border border-primary-600 w-1/2 ">
                <div class="flex flex-col items-center gap-4">
                    {{-- iconBox --}}
                    <div class="flex gap-12">


                        <div class="flex flex-col justify-center items-center gap-3 ">
                            <img src="{{ asset('assets/icons/surface.svg') }}" alt="" class="w-6">
                            <span class="font-medium">
                                {{ $surface }} m²</span>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-3">
                            <img src="{{ asset('assets/icons/users.svg') }}" alt="" class="w-6">
                            <span class="font-medium">max
                                {{ $person }} </span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-3 ">
                        <img src="{{ asset('assets/icons/bed.svg') }}" alt="" class="w-6">
                        <span class="font-medium">
                            {{ $beds }}</span>
                    </div>

                </div>
            </div>
        </div>
    </a>
    <div class="flex justify-center items-center mt-2 mb-6 w-full">
        

            <a href="{{ $link }}"
            class="border   px-16 py-4 uppercase text-xs duration-300   border-black bg-primary-400 hover:text-fontWhite  close">
            Sprawdź
        </a>
    </div>
</div>
