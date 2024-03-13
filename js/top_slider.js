/*--------------------------------
スライダー設定
---------------------------------*/
// KV（PC）
const sliderKvPc = new Swiper(".slider-kv_pc", {

    loop: true,
    speed: 3500, 
    effect: 'fade',

    autoplay: {
        delay: 5000, //秒ごとにスライダを切り替える
        disableOnInteraction: false //スライドに触っても自動再生を停止しない
    },


});

// KV（sp）
const sliderKvSp = new Swiper(".slider-kv_sp", {

    loop: true,
    speed: 2500,            
    effect: 'fade',

    autoplay: {
        delay: 4000, 
        disableOnInteraction: false,
    },

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

