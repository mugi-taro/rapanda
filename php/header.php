<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="https://rapinda.net/">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/dist/images/short_icon.jpg">
  <script src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/dist/css/popup.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/dist/css/reset.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" media="all" rel="stylesheet" type="text/css" />

  <?php wp_head(); ?>

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-83RRMLZ10F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-83RRMLZ10F');
</script>

<body>
  <!-- ヘッダー -->
  <header class="rp-header">
    <div class="rp-site-inner _pd-0">
      <!-- グローバルナビ PC -->
      <div class="header-gnav__pc">
        <div class="gnav-logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/header_logo_02.png">
          </a>
        </div>
        <ul class="gnav-list">
          <li class="gnav-item">
            <?php if (is_front_page()) : ?>
              <a href="#about">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#about')); ?>">
                <?php endif; ?>
                紹介<br>About
                </a>
          </li>
          <li class="gnav-item">
            <?php if (is_front_page()) : ?>
              <a href="#concept">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#concept')); ?>">
                <?php endif; ?>
                コンセプト<br>
                <span>Concept</span>
                </a>
          </li>
          <li class="gnav-item">
            <?php if (is_front_page()) : ?>
              <a href="#topDaily">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#topDaily')); ?>">
                <?php endif; ?>
                お店の１日<br>
                <span>Daily</span>
                </a>
          </li>
          <li class="gnav-item">
            <?php if (is_front_page()) : ?>
              <a href="#news">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#news')); ?>">
                <?php endif; ?>
                お知らせ<br>
                <span>News</span>
                </a>
          </li>
          <li class="gnav-item">
            <?php if (is_front_page()) : ?>
              <a href="#information">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#information')); ?>">
                <?php endif; ?>
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
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/header_logo_02.png">
              </div>
              <li class="ham-gnav-item">
                <?php if (is_front_page()) : ?>
                  <a href="">
                  <?php else : ?>
                    <a href="<?php echo esc_url(home_url()); ?>">
                    <?php endif; ?>
                    ホーム<br>Home
                    </a>
              </li>
              <li class="ham-gnav-item">
              <?php if (is_front_page()) : ?>
              <a href="#about">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#about')); ?>">
                <?php endif; ?>
                  紹介<br>About
                </a>
              </li>
              <li class="ham-gnav-item">
              <?php if (is_front_page()) : ?>
              <a href="#concept">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#concept')); ?>">
                <?php endif; ?>
                  コンセプト<br>
                  <span>Concept</span>
                </a>
              </li>
              <li class="ham-gnav-item">
              <?php if (is_front_page()) : ?>
              <a href="#topDaily">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#topDaily')); ?>">
                <?php endif; ?>
                  お店の１日<br>
                  <span>Daily</span>
                </a>
              </li>
              <li class="ham-gnav-item">
              <?php if (is_front_page()) : ?>
              <a href="#news">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#news')); ?>">
                <?php endif; ?>
                  お知らせ<br>
                  <span>News</span>
                </a>
              </li>
              <li class="ham-gnav-item">
              <?php if (is_front_page()) : ?>
              <a href="#information">
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('#information')); ?>">
                <?php endif; ?>
                  基本情報<br>
                  <span>Information</span>
                </a>
              </li>
              <div class="ham-gnav-sns">
                <a href="https://www.instagram.com/rapinda.pan/" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/images/insta_logo_small.png">
                </a>
              </div>
            </ul>
          </nav>
          <button type="button" id="hamBtn"></button>
        </div>
      </div>
    </div>
  </header>