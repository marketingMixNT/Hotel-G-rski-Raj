<nav class="bg-primary-400 fixed left-0 top-0 right-0 z-50">
    <div
        class="flex justify-between items-center max-w-screen-xl mx-auto py-4 sm:py-10 px-4 md:px-12 2xl:px-0"
    >
        <!--LEFT SIDE-->
        <div class="flex justify-center items-center gap-12 ">
            <div>
                
                <x-nav.Hamburger/>
            </div>
            <a href="tel:+48182071252" class="text-sm mb-1 hidden lg:inline-block duration-300 link-hover"
                >+48 18 20 712 52</a
            >
        </div>
        <!--CENTER-->
        <a href="{{route('home')}}" class="absolute left-1/2 transform -translate-x-1/2 ">
        <img
            src="{{asset('assets/logo/logo.png')}}"
            alt="logo Śleboda Zajazd"
            class=" w-16 sm:w-28 "
        />
    </a>
        <!--RIGHT SIDE-->
        <div class="flex justify-center items-center gap-12 ">
        
            <x-nav.LanguageSwitcher/>
            {{-- <x-base.button href="#" class="hidden xs:inline-block" aria-label="Rezerwuj">Rezerwuj</x-base.button>  --}}
            <button>Rezerwuj</button>
        </div>
    </div>


</nav>