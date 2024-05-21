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

          <?php
          $news_pages = get_specific_posts( 'news', 15 );
          if ($news_pages->have_posts()) :
            while ($news_pages->have_posts()) : $news_pages->the_post();
          ?>
              <li class="rp-news-item">
                <a href="<?php the_permalink(); ?>">
                  <span class="rp-news-item__date"><?php the_time('Y.m.d'); ?></span>
                  <?php the_title(); ?>
                </a>
              </li>

          <?php
            endwhile;
          endif;

          wp_reset_postdata();
          ?>
        </ul>

        <div class='_mt-80'>
          <?php news_pagination(); ?>
        </div>

      </div>

    </section>
  </article>
</main>

<?php get_footer(); ?>