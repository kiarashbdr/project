$(function () {
    var singleSlider = new Swiper("#singleSlider", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var singleRowMultiSlider = new Swiper(".single-row-multi-slider", {
        slidesPerView: 7,
        spaceBetween: 3,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
      });
    var doblSwiper = new Swiper("#doblSwiper", {
        slidesPerView: 7,
        spaceBetween: 3,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

})