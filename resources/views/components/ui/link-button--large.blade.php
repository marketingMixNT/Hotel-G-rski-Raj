@props(['href', 'attributes'])



<a href="{{ $href }}"
    class="border   py-4 px-12 uppercase  duration-500 border-black bg-black close text-fontWhite " {{ $attributes }}>
    {{ $slot }}
</a>
