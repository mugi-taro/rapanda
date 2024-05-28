<?php get_header(); ?>

<?php
if (have_rows('news_post')) :
  while (have_rows('news_post')) : the_row();
?>

    <!-- メイン -->
    <main>
      <article>
        <!-- top -->
        <section class="rp-lower-top">
          <div class="rp-site-inner">
            <div class="rp-section-title">
              <h2 class="rp-section-title__main _title-small">
                <?php the_sub_field('news_title') ?>
              </h2>
            </div>

            <!-- パンくず -->
            <div class="rp-breadcrumb">
              <div class="rp-breadcrumb-inner">
                <?php if (function_exists('bcn_display')) {
                  bcn_display();
                } ?>
              </div>
            </div>
        </section>

        <section class="rp-page-section">
          <div class="rp-site-inner">
            <div class="rp-page-item">
              <div class="rp-page-item__img">
                <?php if (get_sub_field('news_image')) : ?>
                  <?php $image_id = get_sub_field('news_image');
                  echo wp_get_attachment_image($image_id, 'news_post') ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/images/news_thumbnail.png" alt="お知らせバナー">
                <?php endif; ?>
              </div>
              <p class="rp-page-item__text">
                <?php the_sub_field('news_text') ?>
              </p>
            </div>

        <?php
      endwhile;
    endif;
        ?>

        <!-- 前へ・一覧ページ・次へボタン -->
        <nav class="rp-pagenavi">
          <?php
          $next_post = get_next_post();
          $prev_post = get_previous_post();
          if ($next_post) :
          ?>

            <div>
              <a href="<?php echo get_permalink($next_post->ID); ?>" class="rp-btn-prev">
                <span class="rp-pagenavi__text">前へ</span>
                <div class="rp-btn-prev__arrow">
                  <div class="rp-btn-prev__arrow--line01"></div>
                  <div class="rp-btn-prev__arrow--line02"></div>
                </div>
              </a>
            </div>

          <?php else : ?>

            <div class="rp-btn-prev"></div>

          <?php endif; ?>


          <div>
            <a href="<?php echo esc_url(home_url('news')); ?>" class="rp-pagenavi__text">
              <span>お知らせ <br class="sp-only">一覧に戻る</span>
            </a>
          </div>

          <?php if ($prev_post) : ?>

            <div>
              <a href="<?php echo get_permalink($prev_post->ID); ?>" class="rp-btn-next">
                <span class="rp-pagenavi__text">次へ</span>
                <div class="rp-btn-next__arrow">
                  <div class="rp-btn-next__arrow--line01"></div>
                  <div class="rp-btn-next__arrow--line02"></div>
                </div>
              </a>
            </div>

          <?php else : ?>
            <div class="rp-btn-next"></div>
          <?php endif; ?>

        </nav>
          </div>
        </section>
      </article>
    </main>

    <?php get_footer(); ?>