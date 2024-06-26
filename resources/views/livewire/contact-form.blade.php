<div>
    <form method="post" wire:submit.prevent="submitForm" action="{{ route('contact.form') }}" id="contactForm"
        class="max-w-lg mx-auto flex flex-col justify-start items-start">
        @csrf
        {{-- @if ($successMessage) --}}
        @if ($successMessage)
        <div class="rounded-md bg-green-50 p-4 mt-8">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-green-800">
                        {{ $successMessage }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button
                            type="button"
                            wire:click="$set('successMessage', null)"
                            class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                            aria-label="Dismiss">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <x-ui.input wire:model.live.lazy="name" type='text' name='name' id='name' for='name' required>Imię i
            nazwisko</x-ui.input>
            @error('name')
            <p class="text-red-600 text-xs">Imię i nazwisko są wymagane.</p>
        @enderror
           

        <x-ui.input wire:model.live.lazy='email' type='email' name='email' id='email' for='email'
            required>Email</x-ui.input>
            @error('email')
            <p class="text-red-600 text-xs mb-3">Niepoprawny adres email.</p>
        @enderror
        <x-ui.input wire:model.live.lazy='tel' type='tel' name='tel' id='tel' for='tel'>Numer
            telefonu</x-ui.input>
            @error('tel')
            <p class="text-red-600 text-xs mb-3">Numer telefonu może składać się tylko z cyfr oraz znaku +.</p>
        @enderror
        <x-ui.text-area wire:model.live.lazy='content' name='content' id='content' for='content'
            required>Wiadomość</x-ui.text-area>
            @error('content')
            <p class="text-red-600 text-xs mb-3">Wiadomość jest wymagana.</p>
        @enderror


        <x-ui.button-submit extraClasses='mt-6'>
            Wyślij</x-ui.button-submit>

    </form>
</div>
