<a href="{{$link}}"
class=" {{$class}} bg-cover  h-full min-h-[300px] flex flex-col justify-center items-center text-white bg-blend-multiply bg-gray-400 hover:bg-gray-600 duration-500 relative group text-center">

{{$slot}}
<span
    class=" border-t absolute left-0 right-0 bottom-0 h-[50px] flex justify-start items-center pl-12 py-8 text-white gap-1">{{$text}}<img src="{{ asset('assets/icons/arrow-right--long.svg') }}" alt=""
        class="w-10 group-hover:translate-x-2 duration-500"></span>
</a>