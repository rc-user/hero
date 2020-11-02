<?php
/*【表示カスタマイズ】アイキャッチ画像の有効化 */
add_theme_support( 'post-thumbnails' );

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'topic'; //任意のスラッグ名
  }
  return $args;
}

add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


function add_files() {
  /*script*/
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery','//code.jquery.com/jquery-2.1.4.min.js', array(), null, 'all');
  wp_enqueue_script('iscroll','//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array( 'jquery' ), '20201007', false);
  wp_enqueue_script( 'drawer', get_template_directory_uri() . '/js/lib/drawer.min.js', array( 'jquery' ), '20201007', false );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/common.js', array( 'jquery' ), '20200611', false );
  // TOPページ専用
  if ( is_page('front') ) wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/lib/slick.js', array( 'jquery' ), '20200830', false );
  if ( is_page('front') ) wp_enqueue_script( 'front', get_template_directory_uri() . '/js/front.js', array( 'jquery' ), '20200830', false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

