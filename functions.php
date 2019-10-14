<?php

/**
 * ウイジェットエリアを定義
 */
register_sidebar(array(
  'name'          => 'サイドバー１',
  'id'            =>'sideber-1',
  'description'   => 'サイドバーに表示されるウィジェットエリアその１です。',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>'
));

/**
 * 記事一覧ページを定義
 */
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'list';
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/**
 * アイキャッチを有効化
 */
add_theme_support('post-thumbnails');
