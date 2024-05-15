<?php get_header(); ?>
  <!-- メイン -->
  <main>
    <article>
      <!-- top -->
      <section class="rp-lower-top">
        <div class="rp-site-inner">
          <div class="rp-section-title">
            <h2 class="rp-section-title__main _title-small">
              商品の一部価格変更について
            </h2>
          </div>

          <!-- パンくず -->
          <div class="rp-breadcrumb">
            <div class="rp-breadcrumb-inner">
              <span>
                <a href="#">
                  <span>Top</span>
                </a>
              </span>
              &#65295;
              <span>
                <a href="./archive.html"><span>お知らせ一覧</span></a>
              </span>
              &#65295;
              <span>
                <span>商品の一部価格変更について</span>
              </span>
            </div>
          </div>
      </section>

      <section class="rp-page-section">
        <div class="rp-site-inner">
          <div class="rp-page-item">
            <div class="rp-page-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/images/page_sample.jpg" alt="サンプル画像">
            </div>
            <p class="rp-page-item__text">
              いつもご利用いただきありがとうございます。<br>
              昨今の原材料値上げを受けて、今回商品の一部を値上げさせていただくことになりました。<br>
              お客様にはご迷惑をおかけしますが、ご理解のほどよろしくお願いします。
            </p>
          </div>

          <!-- 前へ・一覧ページ・次へボタン -->
          <nav class="rp-pagenavi">
            <div>
              <a href="#" class="rp-btn-prev">
                <span class="rp-pagenavi__text">前へ</span>
                <div class="rp-btn-prev__arrow">
                  <div class="rp-btn-prev__arrow--line01"></div>
                  <div class="rp-btn-prev__arrow--line02"></div>
                </div>
              </a>
            </div>

            <div>
              <a href="./archive.html" class="rp-pagenavi__text">
                <span>お知らせ <br class="sp-only">一覧に戻る</span>
              </a>
            </div>

            <div>
              <a href="#" class="rp-btn-next">
                <span class="rp-pagenavi__text">次へ</span>
                <div class="rp-btn-next__arrow">
                  <div class="rp-btn-next__arrow--line01"></div>
                  <div class="rp-btn-next__arrow--line02"></div>
                </div>
              </a>
            </div>
          </nav>
        </div>
      </section>
    </article>
  </main>

  <?php get_footer(); ?>