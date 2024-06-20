<nav id="mobile-bottom-nav"
    class="bottom-nav_container fixed -bottom-16 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300 bg-white">


    @foreach ($mobileButtons as $item)
        <a href="{{ $item['link'] }}"
            class="border-r border-fontBlack bg-bgDark-400 first-of-type:bg-third-400 first-of-type:hover:bg-third-600 hover:bg-primary-600 transition-colors duration-500 text-fontBlack first-of-type:text-fontDark">
            <div class="flex flex-col justify-center items-center py-2 gap-1">
                <img src="{{ asset('/storage/' . $item['image']) }}" alt="" width="25px" class="w-6 xs:w-7">
                <span class="text-xs uppercase font-semibold ">{{ $item['title'] }}</span></div>
        </a>
    @endforeach


</nav>
