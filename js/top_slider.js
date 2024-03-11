// スライダー設定
const swiper = new Swiper(".swiper", {
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

