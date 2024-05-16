<?php get_header(); ?>

  <!-- メイン -->
  <main>
    <article>
      <!-- top -->
      <section class="rp-lower-top">
        <div class="rp-site-inner">
          <div class="rp-section-title">
            <h2 class="rp-section-title__main">
              News
            </h2>
            <p class="rp-section-title__text">
              らぱんだからのお知らせ
            </p>
          </div>

          <!-- パンくず -->
          <div class="rp-breadcrumb">
            <div class="rp-breadcrumb-inner">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            } ?>
            </div>
          </div>
        </div>
      </section>

      <section class="rp-news-section">
        <div class="rp-site-inner">
          <ul class="rp-news-list">
            <li class="rp-news-item">
              <a href="./page.html">
                <span class="rp-news-item__date">2024.02.01</span>
                商品の一部価格変更について
              </a>
            </li>

            <li class="rp-news-item">
              <a href="./page.html">
                <span class="rp-news-item__date">2024.01.26</span>
                2月の営業日
              </a>
            </li>


            <li class="rp-news-item">
              <a href="./page.html">
                <span class="rp-news-item__date">2024.01.06</span>
                あけましておめでとうございます
              </a>
            </li>
            </a>

            <li class="rp-news-item">
              <a href="./page.html">
                <span class="rp-news-item__date">2023.12.28</span>
                よいお年をお迎えください
              </a>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <?php get_footer(); ?>