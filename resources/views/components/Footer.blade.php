
<footer class="bg-secondary-200 py-12 text-fontWhite pb-24 lg:pb-12">
    <!--CONTAINER-->
    <div class="max-w-screen-xl mx-auto space-y-10">
          <!--GRID-->
    <div class="flex flex-col gap-10 sm:gap-0  s justify-center items-center sm:items-start sm:grid sm:grid-rows-2 lg:grid-rows-1 sm:grid-cols-3 lg:grid-cols-4 mx-4">
<!--ONE-->
        <div
                class="flex items-center justify-center col-span-4 lg:col-span-1"
            >
                <a href="/">
                    <img
                        src="{{asset('/assets/logo/logo--white.png')}}"
                        alt="logo Zajazdu Śleboda"
                        class="w-32 lg:ml-16"
                /></a>
            </div>
<!--TWO-->
<div
                class=" mx-4 md:mx-12 flex flex-col gap-6 justify-center items-center text-center sm:justify-start sm:items-start sm:text-start"
            >
                <div >
                    <h2 class="font-heading text-lg uppercase mb-2">
                        Zadzwoń do nas
                    </h2>
                    <a href="tel:+48453400244" class="font-thin font-heading link-hover"
                        >+48 453 400 244</a
                    >
                </div>
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2">
                        Napisz do nas
                    </h2>
                    <a href="mailto:hello@marketingmix.pl" class="font-thin font-heading link-hover"
                        >hello@marketingmix.pl</a
                    >
                </div>
            </div>
            <!--THREE-->
            <div
                class="mx-4 md:mx-12 flex flex-col justify-center items-center text-center sm:justify-start sm:items-start sm:text-start"
            >
                <h2 class="font-heading text-lg uppercase mb-2">Adres</h2>
                <a href="https://maps.app.goo.gl/VLTNHP6kLLfAWJZdA" target="_blank" class="font-thin font-heading link-hover"
                    >Ludźmierska 26A<br />34-400 Nowy Targ</a
                >
            </div>
                            <!--FOUR-->
                            <div class="mx-4  md:mx-12">
                <h2 class="font-heading text-lg uppercase mb-2 ">
                    Social Media
                </h2>
                <div class="flex justify-center sm:justify-start items-center gap-3">
                    <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank"
                        ><img
                            src="{{asset('/assets/icons/facebook--white.svg')}}"
                            alt="facebook Zajazd Śleboda"
                            class="w-6 hover:scale-110 duration-300"
                    /></a>
                    <a href="https://www.instagram.com/marketingmix_pl/" target="_blank"
                        ><img
                            src="{{asset('/assets/icons/instagram--white.svg')}}"
                            alt="TripAdvisor Zajazd Śleboda"
                            class="w-6 hover:scale-110 duration-300"
                    /></a>
                </div>
            </div>

    </div><!--END GRID-->
    <!--LINKS-->
    <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

        <hr class="opacity-40" />
        <ul class="flex justify-center items-center gap-8 text-xs py-4">
            <li>
                <a href="#" class="link-hover">Polityka Prywatności</a>
            </li>
            <li><a href="" class="link-hover"> Regulamin</a></li>
        </ul>
        <hr class="opacity-40" />
    </div>

             <!--BOTTOM-->
        <div
            class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex justify-between items-center"
        >
            <a
                href="/"
                class="flex gap-2 justify-start items-center link-hover"
            >
                <span >© <span id="footerYear"></span></span>
                <span>Hotel Górski Raj</span>
            </a>
            
            <div>
                <a
                    href="https://marketingmix.pl"
                    target="_blank"
                    class="flex justify-center items-center"
                    ><img
                        src="{{asset('/assets/marketingmix.svg')}}"
                        class="w-40 hover:scale-110 duration-300"
                        alt="logo wykonawcy - agencja MarketingMix"
                /></a>
            </div>
        </div>
    </div><!--END CONTAINER-->
</footer>