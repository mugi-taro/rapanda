/*--------------------------------
スライダー設定
---------------------------------*/
// KV（PC）
const sliderKvPc = new Swiper(".slider-kv_pc", {

    autoplay: {
        delay: 5000, //3秒ごとにスライダを切り替える
        disableOnInteraction: false //スライドに触っても自動再生を停止しない
    },

    effect: "fade",

});

// KV（PC）
const sliderKvSp = new Swiper(".slider-kv_sp", {

    autoplay: {
        delay: 3000, //3秒ごとにスライダを切り替える
        disableOnInteraction: false //スライドに触っても自動再生を停止しない
    },

    effect: "fade",

});

// デイリーセクション
const sliderDaily = new Swiper(".slider-daily", {
    loop: false,

    centeredSlides: true,
    slidesPerView: 1, //ライドを1枚同時表示
    spaceBetween: 60, //スライド間の距離
    speed: 600, //スライドの推移時間

    effect: "fade",

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }

});

