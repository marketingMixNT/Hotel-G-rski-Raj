<nav class="bg-primary-400 fixed left-0 top-0 right-0 z-50">
    <!--CONTAINER -->
    <div class="flex justify-between items-center max-w-screen-xl mx-auto py-4 sm:py-6 px-4 md:px-12 2xl:px-0">
        <!--left side-->
        <div class="flex justify-center items-center gap-12 ">
            <div>
                <x-nav.Hamburger />
            </div>
            <a href="tel:+48453400244" class="text-sm mb-1 hidden lg:inline-block duration-300 link-hover">+48 453 400 244 </a>
        </div>
        <!--center-->
        <a href="{{ route('home') }}"
            class="absolute left-1/2 transform -translate-x-1/2 flex flex-col justify-center items-center gap-1">
            <img src="{{ asset('assets/logo/logo.png') }}" alt="logo Hotelu Górski Raj" width="96" height="50"
                class=" w-16 sm:w-24 " />
            <span class="font-heading text-xl">Hotel Górski Raj</span>
        </a>
        <!--right side-->
        <div class="flex justify-center items-center gap-12 ">

            <div class="hidden lg:block">
                <x-nav.LanguageSwitcher />
            </div>
            <x-ui.LinkBtn href="#" class="hidden sm:inline-block" aria-label="Rezerwuj">Rezerwuj</x-ui.LinkBtn>

        </div>
    </div>


</nav>
