
/* ハンバーガーメニュー */
const hamBtn = document.getElementById("hamBtn");
const hamburgerGnav = document.getElementById("hamburgerGnav")

//クリックすると、ハンバーガーメニューが表示
hamBtn.addEventListener('click', () => {
    document.querySelector('html').classList.toggle('open');
});

//アンカーメニュークリック後、ハンバーガメニュー非表示
$('#js_hamburger a[href]').on('click', function (event) {
    $('#hamBtn').trigger('click');
});

$('.gnav-logo a[href]').on('click', function (event) {
    document.querySelector('html').classList.remove('open');
});
