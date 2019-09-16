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
