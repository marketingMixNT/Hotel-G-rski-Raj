@props([
    'type' => 'primary',
    'href' => '',
    'class' => '',
    'attributes' => '',
])



<a href="{{ $href }}"
    class="border   px-8 py-3 uppercase text-xs duration-300  
        {{ $type === 'primary' ? ' border-black bg-transparent hover:text-white  close' : '' }} 
        {{ $type === 'secondary' ? 'border-white bg-transparent close--white text-fontWhite hover:text-fontBlack' : '' }} 
        {{ $type === 'third' ? 'border-action-400 bg-action-400 text-fontDark hover:bg-white ' : '' }} 
        
        
        {{ $class }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
