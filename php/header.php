<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <title></title>
  <meta name="description" content="">
  <meta name="keywords" content="" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:image" content="">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:image" content="">
  <script src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/popup.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="all" rel="stylesheet" type="text/css" />

  <?php wp_head(); ?>

</head>

<body>
  <!-- ヘッダー -->
  <header class="rp-header">
    <div class="rp-site-inner _pd-0">
      <!-- グローバルナビ PC -->
      <div class="header-gnav__pc">
        <div class="gnav-logo">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/header_logo_02.png">
          </a>
        </div>
        <ul class="gnav-list">
          <li class="gnav-item">
            <a href="#about">
              紹介<br>About
            </a>
          </li>
          <li class="gnav-item">
            <a href="#concept">
              コンセプト<br>
              <span>Concept</span>
            </a>
          </li>
          <li class="gnav-item">
            <a href="#topDaily">
              お店の１日<br>
              <span>Daily</span>
            </a>
          </li>
          <li class="gnav-item">
            <a href="#news">
              お知らせ<br>
              <span>News</span>
            </a>
          </li>
          <li class="gnav-item">
            <a href="#information">
              基本情報<br>
              <span>Information</span>
            </a>
          </li>
          <li class="gnav-item__tell">
            <a href="tel:0774-77-2641">
              <span>TELL</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- グローバルナビ SP -->
      <div class="header-gnav__sp">
        <div id="js_hamburger">
          <nav class="ham-gnav" class="hamburgerGnav">
            <ul class="ham-gnav-list">
              <div class="ham-gnav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/header_logo_02.png">
              </div>
              <li class="ham-gnav-item">
                <a href="#">
                  ホーム<br>Home
                </a>
              </li>
              <li class="ham-gnav-item">
                <a href="#about">
                  紹介<br>About
                </a>
              </li>
              <li class="ham-gnav-item">
                <a href="#concept">
                  コンセプト<br>
                  <span>Concept</span>
                </a>
              </li>
              <li class="ham-gnav-item">
                <a href="#topDaily">
                  お店の１日<br>
                  <span>Daily</span>
                </a>
              </li>
              <li class="ham-gnav-item">
                <a href="#news">
                  お知らせ<br>
                  <span>News</span>
                </a>
              </li>
              <li class="ham-gnav-item">
                <a href="#information">
                  基本情報<br>
                  <span>Information</span>
                </a>
              </li>
              <div class="ham-gnav-sns">
                <a href="https://www.instagram.com/rapinda.pan/" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/insta_logo_small.png">
                </a>
              </div>
            </ul>
          </nav>
          <button type="button" id="hamBtn"></button>
        </div>
      </div>
    </div>
  </header>