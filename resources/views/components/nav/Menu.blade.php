<div id="menu"
    class=" menu-close bg-secondary-200 fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40 " >
    <div class="modal">
        <!--NAV ITEMS-->
        <ul class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-4 xs:gap-8">

            <x-nav.MenuItem href="{{route('apartments')}}">Apartamenty</x-nav.MenuItem>
            <x-nav.MenuItem href="{{route('localAttractions')}}">Lokalne Atrakcje</x-nav.MenuItem>
            <x-nav.MenuItem href="#">Menu</x-nav.MenuItem>
            <x-nav.MenuItem href="#">Galeria</x-nav.MenuItem>
            <x-nav.MenuItem href="#">Kontakt</x-nav.MenuItem>
        </ul>

        {{-- <img src="/assets/decor--light.png" alt="" class="w-16 md:w-18 2xl:w-20 2xl:my-6" /> --}}
        <!--MOBILE LANGUAGE SWITCHER-->
        <div class=" mt-6 absolute right-5 bottom-5 opacity-100">
           <x-nav.LanguageSwitcher/>
        </div>
          <!--SOCIAL-->
        <div class="flex justify-center items-center gap-6 absolute left-5 bottom-5 lg:static">
            <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"><img src="{{ asset('/assets/icons/facebook--white.svg') }}" alt="facebook Zajazd Śleboda"
                    class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" /></a>
            <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"><img src="{{ asset('/assets/icons/instagram--white.svg') }}" alt="facebook Zajazd Śleboda"
                    class="w-6 2xl:w-9 hover:scale-90 duration-300 opacity-70" /></a>
            <a href="https://www.tripadvisor.com/Restaurant_Review-g2712643-d14183598-Reviews-Zajazd_Sleboda-Zab_Lesser_Poland_Province_Southern_Poland.html" target="_blank"><img src="{{ asset('/assets/icons/tripadvisor--white.svg') }}"
                    alt="TripAdvisor Zajazd Śleboda" class="w-7 2xl:w-10 hover:scale-90 duration-300 opacity-70" /></a>
        </div>
    </div>
</div>