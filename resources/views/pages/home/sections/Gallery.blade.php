<section class="section px-6 md:px-12">

    <div class="grid grid-cols-1 md:grid-cols-12  gap-6">

        @for ($i = 0; $i < 4 && $i < count($gallery); $i++)
            <x-ImagePhoto class="h-[400px] p-4 {{ $i % 2 == 0 ? 'col-span-4' : 'col-span-2' }}">
                <a href="{{ asset('/storage/' . $gallery[$i]->image) }}" class="glightbox">
                    <img src="{{ asset('/storage/' . $gallery[$i]->image) }}" alt="{{ $gallery[$i]->alt }}" width="548"
                        height="368" loading="lazy" class="w-full h-full object-cover">
                </a>
            </x-ImagePhoto>
        @endfor
        @for ($i = 4; $i < 8 && $i < count($gallery); $i++)
            <x-ImagePhoto class="h-[400px] p-4 {{ $i % 2 == 0 ? 'col-span-2' : 'col-span-4' }}">
                <a href="{{ asset('/storage/' . $gallery[$i]->image) }}" class="glightbox">
                    <img src="{{ asset('/storage/' . $gallery[$i]->image) }}" alt="{{ $gallery[$i]->alt }}"
                        width="548" height="368" loading="lazy" class="w-full h-full object-cover">
                </a>
            </x-ImagePhoto>
        @endfor




    </div>

    <div class="flex justify-center items-center mt-12">

        <x-ui.link-button type='secondary' href=''>Zobacz galerię</x-ui.link-button>
    </div>
</section>
