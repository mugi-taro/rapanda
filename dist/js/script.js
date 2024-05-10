
$(function () {

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

    // アコーディオン
    $(".js-accordion_title").on("click", function () {
        // クリックした次の要素を開閉
        $(this).next().slideToggle(450);
        // タイトルにopenクラスを付け外しして矢印の向きを変更
        $(this).toggleClass("open", 450);
    });

    // スタート画面 2回目以降のアクセスは表示しない
    var webStorage = function () {
        if (sessionStorage.getItem('access')) {
            /* 2回目以降アクセス時の処理 */
            $(".top-start").addClass('no-active');
        } else {
            /* 初回アクセス時の処理 */
            sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
            $(".top-start-animation").addClass('is-active'); // loadingアニメーションを表示
            setTimeout(function () {
                $(".top-start").addClass('no-active');
                $(".top-start-animation").removeClass('is-active');
            }, 5000); // ローディングを表示する時間
        }
    }
    webStorage();

});



// スクロール固定用
let scrollPositionFixed;
const ua = window.navigator.userAgent.toLowerCase();
const isiOS = ua.indexOf("iphone") > -1 || ua.indexOf("ipad") > -1 || (ua.indexOf("macintosh") > -1 && "ontouchend" in document);
const body = document.querySelector("body");

function bodyFixedOn() {
    if (isiOS) {
        scrollPositionFixed = window.pageYOffset;
        body.style.position = "fixed";
        body.style.top = `-${scrollPositionFixed}px`;
    } else {
        body.style.overflow = "hidden";
    }
}

function bodyFixedOff() {
    if (isiOS) {
        body.style.removeProperty("position");
        body.style.removeProperty("top");
        window.scroll(0, scrollPositionFixed);
    } else {
        body.style.removeProperty("overflow");
    }
}

