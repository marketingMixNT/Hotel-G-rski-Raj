<main
class="relative flex flex-col justify-center items-center h-[75vh]  sm:mt-0 w-full bg-cover bg-center bg-fixed bg-gray-500 bg-blend-multiply text-fontLight text-white gap-4"
style="background-image: url('{{ asset('assets/img/errors.webp') }}')">

<span class="text-sm 2xl:text-base font-semibold tracking-widest uppercase mt-24">{{$errorCode}}</span>
<h1
    class="text-center text-4xl xs:text-5xl sm:text-6xl  tracking-wider uppercase font-heading font-bold">
   {{$slot}}
</h1>
<a class="link-hover mt-12" href="{{ url()->previous() }}" >Powrót</a>


</main>