<a href="{{ $link }}"
    class="relative flex flex-col justify-start sm:justify-center items-center h-full min-h-[300px] pt-16 sm:pt-0 bg-cover bg-blend-multiply bg-gray-400 hover:bg-gray-600 text-center text-fontWhite group duration-500  {{ $class }}">

    {{ $slot }}
    <span
        class=" absolute left-0 right-0 bottom-0 flex justify-start items-center gap-1 h-[50px] pl-12 py-8 border-t  text-white text-sm">{{ $text }}<img
            src="{{ asset('assets/icons/arrow-right-long.svg') }}" alt="" width="40" height="40"
            class="w-10 group-hover:translate-x-2 duration-500 mb-1 sm:mb-0"></span>
</a>
