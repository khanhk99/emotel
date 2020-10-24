// init header
const header = document.querySelector("header");
window.addEventListener("scroll", () => {
    let scrollTop = document.getElementsByTagName("html")[0].scrollTop;

    if (scrollTop >= 300) {
        header.classList.add("scrolled");
        header.classList.remove("headerLight");
    } else {
        header.classList.remove("scrolled");
    }
});

// init swiper
const swiper = new Swiper(".swiper-container", {
    direction: "horizontal",
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
        500: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        980: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

// init list img
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs
    }
});

// init select2
$(document).ready(() => {
    $(".place-chooser").select2({
        placeholder: "Địa điểm",
        allowClear: true,
    });
    $(".number-chooser").select2({
        placeholder: "Số người",
        allowClear: true,
    });
});

// init datedroper
$("#start-date").dateDropper({
    format: "d-m-Y",
    theme: "leaf",
    large: true,
});
$("#end-date").dateDropper({
    format: "d-m-Y",
    theme: "leaf",
    large: true,
});

// init masonry
$(".grid").isotope({
    itemSelector: ".grid-item",
    percentPosition: true,
    masonry: {
        columnWidth: ".grid-sizer",
        gutter: 10,
    },
});

// Toggle user menu
const userBtn = document.querySelector(".header__rightUser");
const userSubMenu = document.querySelector(".header__userMenu > ul");
userBtn.addEventListener("click", () => {
    userSubMenu.classList.toggle("show");
});
