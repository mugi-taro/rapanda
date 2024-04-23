
$(function () {
    //ページ内スクロール
    var navHeight = $(".gnav__list").outerHeight();

    $('a[href^="#"]').on("click", function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - navHeight;
        $("html, body").animate({ scrollTop: position, }, 600, "swing");
        return false;
    });

    // ページ内スクロール
    var headerHeight = $('header').outerHeight(); 
    var urlHash = location.hash; // ハッシュ値があればページ内スクロール
    if (urlHash) { // 外部リンクからのクリック時
        $('body,html').stop().scrollTop(0); // スクロールを0に戻す
        setTimeout(function () { // ロード時の処理を待ち、時間差でスクロール実行
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({ scrollTop: position }, 500); // スクロール速度ミリ秒
        }, 100);
    }

    $('a[href^="#"]').click(function () { // 通常のクリック時
        var href = $(this).attr("href"); // ページ内リンク先を取得
        var target = $(href);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({ scrollTop: position }, 500); // スクロール速度ミリ秒
        return false; // #付与なし、付与したい場合は、true
    });


    //アニメーションをつけるときはclassにfadeと動きを指示するクラスを付与する
    $(window).on('load scroll', function () {
        $('.fade').each(function () {
            var target = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var height = $(window).height();
            if (scroll > target - height) {
                $(this).addClass('active');
            }
        });
    });

    // アコーディオン
    $(".js-accordion_title").on("click", function () {
        // クリックした次の要素を開閉
        $(this).next().slideToggle(450);
        // タイトルにopenクラスを付け外しして矢印の向きを変更
        $(this).toggleClass("open", 450);
    });

    //スタートアニメーション
    setTimeout(function () {
        $('.top-start p').fadeIn(1200);
    }, 500); //0.5秒後にロゴ表示
    setTimeout(function () {
        $('.top-start').fadeOut(600);
    }, 5500); //5秒後に非表示

});

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
