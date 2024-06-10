

<ul id="languageSwitcher" class="flex gap-4 text-black duration-500">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a
                rel="alternate"
                hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            >
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>