<?php

/*非表示*/
function remove_cssjs_ver2( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/*出力側の変換機能を無効化*/
remove_filter( 'the_content', 'wpautop' ); // 記事の自動整形を無効にする
remove_filter( 'the_content', 'wptexturize' ); // 抜粋の自動整形を無効にする

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'ウィジェット名',
'id' => 'ウィジェットのID',
'description' => 'ウィジェットの説明',
'before_widget' => 'ウィジェットを囲む開始タグ',
'after_widget' => 'ウィジェットを囲む終了タグ',
'before_title' => 'ウィジェットのタイトルを囲む開始タグ',
'after_title' => 'ウィジェットのタイトルを囲む終了タグ'
));
}

/*エディターの自動整形を防ぐ*/
function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );


//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
	return 40;
}
add_filter('excerpt_mblength', 'my_excerpt_length');


//概要（抜粋）の省略文字
function my_excerpt_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');



// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
// サムネイル画像のサイズ指定。
set_post_thumbnail_size(348, 225, true);

//add_image_size('thum_350', 350, 230, true);



//検索対象をカスタム投稿「library」だけに
function filter_search($query) {
	if ($query->is_search) {
		$query->set('post_type', array('library'));
	};
	return $query;
};
add_filter('pre_get_posts', 'filter_search');



//ショートコードを使い投稿内にphpファイルの呼び出せるようにする[myphp file='my-template']
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');



/* サイトURLを取得するショートコードを作成 */
/* 投稿内で [url] と記述する */

function shortcode_url() {
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');


/* テーマフォルダのパスを取得するショートコードを作成 */
/* 投稿内で [template_url] と記述する */
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');


// 固定の親ページの子か判定
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

// カスタム投稿の月別アーカイブ
/*
global $my_archives_post_type;
add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
  global $my_archives_post_type;
  if ( isset($r['post_type']) ) {
    $my_archives_post_type = $r['post_type'];
    $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'', $where );
  } else {
    $my_archives_post_type = '';
  }
  return $where;
}
add_filter( 'get_archives_link', 'my_get_archives_link' );
function my_get_archives_link( $link_html ) {
  global $my_archives_post_type;
  if ( '' != $my_archives_post_type )
    $add_link .= '?post_type=' . $my_archives_post_type;
    $link_html = preg_replace("/href=\'(.+)\'\s/","href='$1".$add_link." '",$link_html);
  return $link_html;
}
*/


?>
