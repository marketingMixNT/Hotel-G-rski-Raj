import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
    Navigation,
    Pagination,
    EffectCoverflow,
} from "swiper/modules";
import "swiper/swiper-bundle.css";

//HERO CAROUSEL
new Swiper(".hero-carousel", {
    loop: true,
    effect: "fade",
    slidesPerView: 1,

    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    modules: [Autoplay, EffectFade],
});

//ADVANTAGES CAROUSEL
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
    modules: [Autoplay, Navigation, Pagination, EffectFade],
});

//OFFER CAROUSEL
new Swiper(".offer-carousel", {
    loop: true,
    effect: "fade",
    grabCursor: true,
    slidesPerView: 1,

    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1250: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },

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

//TESTIMONIALS CAROUSEL
new Swiper(".testimonial-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay, Navigation, Pagination],
});

//ALL APARTMENTS CAROUSEL
new Swiper(".apartments-carousel", {
    effect: "fade",
    grabCursor: true,
    centeredSlides: true,

    slidesPerView: 2,
    spaceBetween: 150,

    modules: [Autoplay, Navigation, Pagination],
});

//APARTMENT GALLERY CAROUSEL
new Swiper(".apartment-gallery-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay],
});

//OTHER ROOMS CAROUSEL
new Swiper(".other-rooms-carousel", {
    loop: true,
    effect: "fade",
    grabCursor: "true",
    slidesPerView: 1,

    breakpoints: {
        880: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay],
});

//CONTACT CAROUSEL
new Swiper(".contact-carousel", {
    loop: true,
    effect: "coverflow", // Poprawiono "overflow" na "coverflow"
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    breakpoints: {
        880: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
    },
    modules: [Autoplay, EffectCoverflow], // Poprawiono "EffectOverflow" na "EffectCoverflow"
});
