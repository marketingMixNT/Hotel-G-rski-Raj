@props(['class'=>''])


<ul id="languageSwitcher" class="justify-center items-center gap-5 list-none text-sm flex">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a
                rel="alternate"
                hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="duration-300 link-hover uppercase text-white lg:text-fontBlack"
            >
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>



