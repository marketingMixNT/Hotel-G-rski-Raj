@props(['fullWidth'=>false, 'class'=>''])

<section {{ $attributes }}
    class="first-of-type:py-16 md:first-of-type:py-24 py-8 md:py-12 last-of-type:pb-8 md:last-of-type:pb-24 mx-auto  {{$fullWidth ? '' :'px-6 md:px-12'}} {{$class}}">
    {{ $slot }}
</section>
