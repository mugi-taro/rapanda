<?php

if (!is_admin()) {

    // 外部CSSファイル追加の関数
    function file_load_assets()
    {

        /* === トップページ === */

        if (is_front_page() || is_page('top')) {

            /* === style === */

            // トップ
            wp_enqueue_style('top-style', get_template_directory_uri() . '/dist/css/top.css', array());

            /* === script === */
            // トップスライダー
            wp_enqueue_script('top-loading-script', get_template_directory_uri() . '/dist/js/top_slider.js', array(), '1.0', true);
        }

        /* === ラインナップ === */
        if (is_page('lineup')) {

            /* === style === */
            wp_enqueue_style('lineup-style', get_template_directory_uri() . '/dist/css/lower.css', array());

            /* === script === */
            // wp_enqueue_script('lineup-script', get_template_directory_uri().'/js/lineup.js', array(), '1.0', true);
        }

        /* === お店の一日 === */
        if (is_page('daily')) {

            /* === style === */
            wp_enqueue_style('daily-style', get_template_directory_uri() . '/dist/css/lower.css', array());

            /* === script === */
            wp_enqueue_script('daily-script', get_template_directory_uri() . '/dist/js/daily_slider.js', array(), '1.0', true);
        }

        /* === お知らせ === */

        // カスタム投稿タイプ「お知らせ」アーカイブページを指定
        if (is_post_type_archive('news')) {

            /* === style === */
            wp_enqueue_style('news-style', get_template_directory_uri() . '/dist/css/lower.css', array());

            /* === script === */
            // wp_enqueue_script('news-script', get_template_directory_uri().'/js/news.js', array(), '1.0', true);
        }

        /* === お知らせ / 詳細 === */

        // カスタム投稿タイプ「お知らせ」記事ページを指定
        if (is_singular('news')) {

            /* === style === */
            wp_enqueue_style('news-detail-style', get_template_directory_uri() . '/dist/css/lower.css', array());
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

// アイキャッチ画像の設定をテーマに適用
add_theme_support('post-thumbnails');



/* === お知らせ === */
function news_post_type()
{

    // カスタム投稿タイプの追加
    register_post_type(
        'news', //投稿タイプ名（スラッグ）指定
        array(
            'label' => 'お知らせ', //カスタム投稿タイプの表示名
            'public' => true, // 公開（管理画面に表示）するか
            'menu_position' => 5, //管理画面の表示順
            'menu_icon' => 'dashicons-buddicons-pm', //管理画面で表示されるアイコン
            'has_archive' => true, //一覧（アーカイブ）ページを生成
            'supports' => array( //記事編集画面の表示項目
                'title', //タイトル
                'editor', //編集エディタ
                'thumbnail', //アイキャッチ画像
                'custom-fields', //カスタムフィールド
                'revisions' //リビジョンを保存
            )
        )
    );

    // カスタム投稿タイプにリビジョン追加
    add_post_type_support('news', 'revisions');
}

//「お知らせ」投稿タイプに関する情報を登録
add_action('init', 'news_post_type');

// アイキャッチ画像を管理画面に表示（見出し）
function news_column($columns) {
	$columns['thumbnail'] = 'アイキャッチ';
	return $columns;
}

// アイキャッチ画像を管理画面に表示（テーブル）
function news_columns_list($column_name, $post_id) {
	if ( 'thumbnail' == $column_name ) {
        $thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
        echo ( $thumb ) ? $thumb : '?';
	} 
}

//manage_edit-[カスタム投稿タイプのスラッグ]_columns
add_filter('manage_edit-news_columns', 'news_column');
//manage_[カスタム投稿タイプのスラッグ]_posts_custom_column
add_action('manage_news_posts_custom_column', 'news_columns_list', 10, 2);

// 特定の記事を抽出する関数（タクノミー、タームの設定なし、ページネーション有効）
function get_specific_posts( $post_type, $number = -1 ){

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => $number, 
        'paged' => $paged,
	);
	$specific_posts = new WP_Query( $args );
	return $specific_posts;
}

// ページネーション設定（お知らせ仕様）
function news_pagination(){

	$args = array(
        'total'         => 1,
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => ('<<'), // 「前へ」リンクのテキスト
        'next_text'     => ('>>'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list
    );

    the_posts_pagination($args);

}


?>
