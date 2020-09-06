<?php

namespace dcp\lpb;

/**
 * LPを表示するときは、テーマ内のcssを使わないようにする
 * @return [type] [description]
 */
function deregister_theme_style()
{

    // LPなら
    if (is_page_template(DANGAN_PAGE_TEMPLATE_PATH)) {
        $theme_styles = array();

        global $wp_styles;
         // var_dump( $wp_styles );

        foreach ($wp_styles -> registered as $style) {
            // テーマ内のCSSファイルを参照しているなら
            if (strpos($style->src, 'wp-content/themes') !== false) {
                array_push($theme_styles, $style->handle);
            }
        }

        foreach ($theme_styles as $handle) {
            wp_deregister_style($handle);
        }

        // wp_deregister_style(get_template() . '-style');
    }
}

add_action('wp_print_styles', 'dcp\lpb\deregister_theme_style');


function deregister_theme_script()
{
    if (is_uridas()) {
        wp_dequeue_script('sage/js');
    }
}

add_action('wp_print_scripts', 'dcp\lpb\deregister_theme_script');

/**
 * LPを表示するときは、専用のCSSを読み込む
 * @return [type] [description]
 */
function enqueue_lpb_style()
{
    if (is_page_template(DANGAN_PAGE_TEMPLATE_PATH)) {
        $path = plugins_url('dist/css/style.min.css', dirname(__FILE__));
        wp_enqueue_style('lpb-style', $path);
        wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
        $use_noto = get_field('use_noto', 'option');
        if ($use_noto === NULL) {
            $use_noto = true;
        }
        if ($use_noto) {
            wp_enqueue_style('notosans-style', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css');
        }
    }
}

add_action('wp_print_styles', 'dcp\lpb\enqueue_lpb_style');

function enqueue_lpb_script()
{
    if (is_page_template(DANGAN_PAGE_TEMPLATE_PATH)) {
        $version = get_file_data(plugin_dir_path(__FILE__) . '../dangan-page-builder.php', array( 'Version' ), 'plugin');
        wp_enqueue_script('jquery', plugins_url('dist/js/jquery-3.2.1.slim.min.js', dirname(__FILE__)));
        wp_enqueue_script('popper', plugins_url('dist/js/popper.min.js', dirname(__FILE__)));
        wp_enqueue_script('bootstrap', plugins_url('dist/js/bootstrap.min.js', dirname(__FILE__)));
        wp_enqueue_script('jquery-countdown', plugins_url('dist/js/jquery.countdown.min.js', dirname(__FILE__)));
        wp_enqueue_script('lpb-main-script', plugins_url('dist/js/main.js', dirname(__FILE__)), array(), $version[0]);
    }
}

add_action('wp_footer', 'dcp\lpb\enqueue_lpb_script');

/**
 * 管理画面用のスクリプト
 * @return [type] [description]
 */
function admin_script()
{

    if (get_post_type() == 'dcp_form') {
      wp_enqueue_script('register_form_script', plugins_url('../dist/js/register_form.js', __FILE__), '', '', true);
    }else if(get_post_type() == 'page'){
      wp_enqueue_script('dpb_edior_script', plugins_url('../dist/js/editor.js', __FILE__), '', '', true);
    }
}
add_action('admin_head-post-new.php', 'dcp\lpb\admin_script');
add_action('admin_head-post.php', 'dcp\lpb\admin_script');

/**
 * 管理画面用のCSS
 * @return [type] [description]
 */
function admin_style()
{

        $path = plugins_url('dist/css/admin.min.css', dirname(__FILE__));
        wp_enqueue_style('lpb-admin-style', $path);
        wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
}
add_action('admin_enqueue_scripts', 'dcp\lpb\admin_style');

/**
 * カスタムメニューを登録
 * @return [type] [description]
 */
function register_menu()
{
    register_nav_menu('lpb-menu', 'スクイーズページのフッターメニュー');
}

add_action('after_setup_theme', 'dcp\lpb\register_menu');

function custom_css()
{
    if (get_field('add_css')) {
        ?>
        <style type="text/css">
        <?php  the_field('css')  ?>
        </style>
        <?php                                                                                                         }
}
add_action('wp_head', 'dcp\lpb\custom_css');


function theme_fix()
{
  if(!is_admin() && is_page_template( DANGAN_PAGE_TEMPLATE_PATH )){

    if ( is_lionmedia() ) {
    	remove_action( 'wp_head', 'fit_head' );
    	remove_action( 'wp_footer', 'fit_footer' );
    	remove_action( 'wp_head', 'fit_head_child' );
    }

    if( have_rows('remove_action_hook', 'option') ){
      while ( have_rows('remove_action_hook', 'option') ) {
        the_row();
        remove_action( get_sub_field('hook'), get_sub_field('function') );
      }
    }
  }

}

add_action('wp', 'dcp\lpb\theme_fix');


function gutenberg_notice(){
  global $pagenow;
  global $wp_version;

  if ( version_compare( $wp_version, '5', '>=' ) && !is_plugin_active( 'classic-editor/classic-editor.php' ) ) {
    if ( $pagenow == 'index.php' ) {
      echo '<div class="notice notice-warning is-dismissible">
            <p>重要なお知らせ：<a href="http://pages.digitalcontent.tokyo/dpb_manual/other/gutenberg.html" target="_blank">WordPress 5.0で搭載された新エディターGutenbergへの対応について</a></p>
           </div>';
    }
  }
}
add_action('admin_notices', 'dcp\lpb\gutenberg_notice');
