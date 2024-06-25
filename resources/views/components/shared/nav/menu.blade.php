<div id="menu"
    class=" menu-close bg-secondary-200 fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40 " >
    <div class="modal gap-24">
        <!--NAV ITEMS-->
        <ul class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-4 xs:gap-8">

            <x-shared.nav.menu-item href="{{route('apartments')}}">Apartamenty</x-shared.nav.menu-item>
            <x-shared.nav.menu-item href="{{route('offers')}}">Oferty Specjalne</x-shared.nav.menu-item>
            <x-shared.nav.menu-item href="{{route('localAttractions')}}">Lokalne Atrakcje</x-shared.nav.menu-item>
            <x-shared.nav.menu-item href="{{route('hotelAttractions')}}">Udogodnienia Hotelowe</x-shared.nav.menu-item>
            <x-shared.nav.menu-item href="#">Galeria</x-shared.nav.menu-item>
            <x-shared.nav.menu-item href="#">Kontakt</x-shared.nav.menu-item>
            <x-shared.nav.menu-item href="/blogs">Aktualności</x-shared.nav.menu-item>
        </ul>

        {{-- <img src="/assets/decor--light.png" alt="" class="w-16 md:w-18 2xl:w-20 2xl:my-6" /> --}}
        <!--MOBILE LANGUAGE SWITCHER-->
        <div class=" mt-6 absolute right-5 bottom-5 opacity-100">
           <x-shared.nav.language-switcher/>
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