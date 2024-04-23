// スライダー設定
// サムネイル
const sliderThumbnail = new Swiper(".slider-thumbnail", {
    slidesPerView: 3,
});

const sliderThumbnail02 = new Swiper(".slider-thumbnail02", {
    slidesPerView: 3,
});

const sliderThumbnail03 = new Swiper(".slider-thumbnail03", {
    slidesPerView: 3,
});

const sliderThumbnail04 = new Swiper(".slider-thumbnail04", {
    slidesPerView: 3,
});

// スライダー
const slider = new Swiper(".slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 60,
    effect: "fade",

    thumbs: {
        swiper: sliderThumbnail,
    },
});

const slider02 = new Swiper(".slider02", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 60,
    effect: "fade",

    thumbs: {
        swiper: sliderThumbnail02,
    },
});

const slider03 = new Swiper(".slider03", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 60,
    effect: "fade",

    thumbs: {
        swiper: sliderThumbnail03,
    },
});

const slider04 = new Swiper(".slider04", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 60,
    effect: "fade",

    thumbs: {
        swiper: sliderThumbnail04,
    },
});




