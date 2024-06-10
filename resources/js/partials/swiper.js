import Swiper from "swiper";
import { Autoplay, EffectFade, Navigation, Pagination } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".hero-carousel", {
    loop: true,
    effect: "fade",
    // grabCursor: true,
    slidesPerView: 1,
    

    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    modules: [Autoplay, EffectFade],
});

new Swiper(".advantages-carousel", {
    loop: true,
    effect: "fade",
    grabCursor: true,
    slidesPerView: 1,
    effect: "fade",

    
   
    navigation: {
        nextEl: ".advantages-next",
        prevEl: ".advantages-prev",
    },
    pagination: {
        el: ".swiper-pagination", 
        clickable: true, 
    },
    modules: [Autoplay, Navigation, Pagination,EffectFade],
});

new Swiper(".offer-carousel", {
    loop: true,
    effect: "fade",
    // grabCursor: true,
    slidesPerView: 3,
    

    spaceBetween: 50,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
        
    },
    navigation: {
        nextEl: ".offer-next",
        prevEl: ".offer-prev",
    },
    pagination: {
        el: ".swiper-pagination", 
        clickable: true, 
    },
    modules: [Autoplay, Navigation, Pagination],
});