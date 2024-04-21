var swiper = new Swiper(".default-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    }
});

var navigationSwiper = new Swiper(".navigation-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination"
    }
});

var paginationDynamicSwiper = new Swiper(".pagination-dynamic-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
        dynamicBullets: true
    }
});

var paginationFractionSwiper = new Swiper(".pagination-fraction-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
        type: "fraction"
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

var paginationCustomSwiper = new Swiper(".pagination-custom-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
    }
});

var paginationProgressSwiper = new Swiper(".pagination-progress-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar"
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

var paginationScrollbarSwiper = new Swiper(".pagination-scrollbar-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

var verticalSwiper = new Swiper(".vertical-swiper", {
    loop: true,
    direction: "vertical",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});

var mousewheelControlSwiper = new Swiper(".mousewheel-control-swiper", {
    loop: true,
    direction: "vertical",
    mousewheel: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});

var effectFadeSwiper = new Swiper(".effect-fade-swiper", {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});

var effectCoverflowSwiper = new Swiper(".effect-coverflow-swiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "4",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true
    }
});

var effectFlipSwiper = new Swiper(".effect-flip-swiper", {
    loop: true,
    effect: "flip",
    grabCursor: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});

var effectCreativeSwiper = new Swiper(".effect-creative-swiper", {
    loop: true,
    grabCursor: true,
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: true,
            translate: [0, 0, -400]
        },
        next: {
            translate: ["100%", 0, 0]
        }
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});

var responsiveSwiper = new Swiper(".responsive-swiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 3000,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 50
        }
    },
    autoplay: { // Add the autoplay section
        delay: 0, // Slide delay in milliseconds (e.g., 3 seconds)
        disableOnInteraction: false // Optional: Keep autoplay running after interaction
    },
});
