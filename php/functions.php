<?php

if (!is_admin()) {

    // 外部CSSファイル追加の関数
    function file_load_assets()
    {

        /* === コーポレートトップ === */

        if (is_front_page() || is_page('top')) {

            /* === style === */

            // トップ
            wp_enqueue_style('top-style', get_template_directory_uri() . '/css/top.css', array());

            /* === script === */
            // トップスライダー
            wp_enqueue_script('top-loading-script', get_template_directory_uri() . '/js/top_slider.js', array(), '1.0', true);
        }

        /* === ラインナップ === */
        if (is_page('lineup')) {

            /* === style === */
            wp_enqueue_style('lineup-style', get_template_directory_uri() . '/css/lower.css', array());

            /* === script === */
            // wp_enqueue_script('lineup-script', get_template_directory_uri().'/js/lineup.js', array(), '1.0', true);
        }

        /* === お店の一日 === */
        if (is_page('daily')) {

            /* === style === */
            wp_enqueue_style('daily-style', get_template_directory_uri() . '/css/lower.css', array());

            /* === script === */
            wp_enqueue_script('daily-script', get_template_directory_uri().'/js/daily_slider.js', array(), '1.0', true);
        }

        /* === お知らせ === */

        // カスタム投稿タイプ「お知らせ」アーカイブページを指定
        if (is_post_type_archive('news')) {

            /* === style === */
            wp_enqueue_style('news-style', get_template_directory_uri() . '/css/lower.css', array());

            /* === script === */
            // wp_enqueue_script('news-script', get_template_directory_uri().'/js/news.js', array(), '1.0', true);
        }

        /* === お知らせ / 詳細 === */

        // カスタム投稿タイプ「お知らせ」記事ページを指定
        if (is_singular('news')) {

            /* === style === */
            wp_enqueue_style('news-detail-style', get_template_directory_uri() . '/css/lower.css', array());
            // wp_enqueue_style('news-detail-test-style', get_template_directory_uri().'/css/corporate/news/news-detail-test.css', array());

            /* === script === */
            // wp_enqueue_script('news-detail-script', get_template_directory_uri().'/js/news-detail.js', array(), '1.0', true);
        }
    }

    // wp_head(trueが付いている場合はwp_footer)に処理を登録
    add_action('wp_enqueue_scripts', 'file_load_assets');

// } else {

    // 管理画面の場合
    /* === style === */
    // function admin_file_load_assets()
    // {

    //     // 管理画面のCSS
    //     wp_enqueue_style('admin-style', get_template_directory_uri() . '/css/admin.css', array());

    //     /* === script === */
    //     wp_enqueue_script('admin-script', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0', true);
    // }

    // admin_headに処理を登録
    // add_action('admin_enqueue_scripts', 'admin_file_load_assets');
}
