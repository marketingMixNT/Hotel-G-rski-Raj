import Swiper from "swiper";
import { Autoplay, EffectFade, Navigation, Pagination } from "swiper/modules";
import "swiper/swiper-bundle.css";

//HERO CAROUSEL
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
    modules: [Autoplay, Navigation, Pagination,EffectFade],
});

//OFFER CAROUSEL
new Swiper(".offer-carousel", {
    loop: true,
    effect: "fade",
    // grabCursor: true,
    slidesPerView: 1,
    
    breakpoints: {
        
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        }},
    
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
    // effect: "fade",
    grabCursor: true,
    slidesPerView: 1,

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
        
    },
    // navigation: {
    //     nextEl: ".testimonial-next",
    //     prevEl: ".testimonial-prev",
    // },
    // pagination: {
    //     el: ".swiper-pagination", 
    //     clickable: true, 
    // },
    modules: [Autoplay, Navigation, Pagination],
});


//ALL APARTMENTS CAROUSEL
new Swiper(".apartments-carousel", {
    // loop: true,
    effect: "fade",
    grabCursor: true,
    centeredSlides: true,

    slidesPerView: 2,
    spaceBetween: 150,
    


    // breakpoints: {
        
    //     768: {
    //       slidesPerView: 2,
    //       spaceBetween: 40,
    //     },
    //     1024: {
    //       slidesPerView: 3,
    //       spaceBetween: 50,
    //     }},
    
    // autoplay: {
    //     delay: 3500,
    //     disableOnInteraction: true,
    //     pauseOnMouseEnter: true,
        
    // },
    // navigation: {
    //     nextEl: ".offer-next",
    //     prevEl: ".offer-prev",
    // },
    // pagination: {
    //     el: ".swiper-pagination", 
    //     clickable: true, 
    // },
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
        }},
    
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
        
    },
   
   
    modules: [Autoplay, ],
});

//OFFER CAROUSEL
new Swiper(".other-rooms-carousel", {
    loop: true,
    effect: "fade",
    
    slidesPerView: 1,
    
    breakpoints: {
        
       
        880: {
          slidesPerView: 2,
          spaceBetween: 30,
        }},
    
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
        
    },
  
    modules: [Autoplay, ],
});