@if (isset($formSubmitted))
    <div class="flex justify-center items-center">
        <div class=" flex flex-col gap-4 text-center my-6">

            <span class="text-5xl font-bold mb-2 font-handwriting">Dziękujemy za wiadomość!</span>
            <span class="text-xl font-bold">Odpowiemy najszybciej jak to możliwe!</span>
        </div>
    </div>
@else
    <div>


        <form method="post" action="{{ route('contact_form') }}" id="contactForm"
            class="max-w-md mx-auto flex flex-col justify-start items-start">
            @csrf

            <x-ui.input type='text' name='name' id='name' for='name' required>Imię i
                nazwisko</x-ui.input>
            <x-ui.input type='email' name='email' id='email' for='email' required>Email</x-ui.input>
            <x-ui.input type='tel' name='tel' id='tel' for='tel'>Numer
                telefonu</x-ui.input>
            @error('tel')
                <p class="text-red-600 text-xs">Numer telefonu może składać się tylko z cyfr oraz znaku +.</p>
            @enderror
            <x-ui.text-area name='content' id='content' for='content' required>Wiadomość</x-ui.text-area>
            {!! htmlFormSnippet() !!}
            @if ($errors->has('g-recaptcha-response'))
                <p class="text-red-600 text-xs mt-4">Wpisz ReCaptcha</p>
            @endif


            <x-ui.submit-button extraClasses='mt-6'>
                Wyślij</x-ui.submit-button>

        </form>

    </div>
@endif