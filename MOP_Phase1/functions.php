<?php
// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
	'name' => __( 'Side Widget' ),
	'id' => 'side-widget',
	'before_widget' => '<li class="widget-container">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Side Widget-2' ),
	'id' => 'side-widget-2',
	'before_widget' => '<li class="widget-container">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );

// フッターエリアのウィジェット
register_sidebar( array(
	'name' => __( 'Footer Widget' ),
	'id' => 'footer-widget',
	'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
	'after_widget' => '</li></ul></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );



// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 400, true ); // 幅 220px、高さ 165px、切り抜きモード


// カスタムナビゲーションメニュー
add_theme_support('menus');

register_nav_menus( array(
    'main_navi' => 'メインナビ',
    'second_navi' => 'セカンドナビ',
));

?>