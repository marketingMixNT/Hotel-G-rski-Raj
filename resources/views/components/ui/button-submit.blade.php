@props(['extraClasses' => '', 'attributes' => []])




<button wire.loading.attr="disabled" type="submit" {{$attributes}}
    class="flex  justify-center items-center gap-2 border border-black bg-bgDark-400 px-8 py-3 uppercase text-xs duration-300 text-fontLight close--white hover:text-fontDark {{ $extraClasses }}">
    <svg wire:loading  wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="#000000"
    viewBox="0 0 24 24">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
    <path class="opacity-75" fill="#000000"
        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
    </path>
</svg>
    {{ $slot }}
</button>