<?php
namespace dcp\lpb;

/**
 * カウントダウン用クッキーを作成
 * @return [type] [description]
 */
function countdown_set_cookie() {

  $post_id = url_to_postid( $_SERVER['REQUEST_URI'] , '_wpg_def_keyword', true );
  $dpb_contdown_cookie_name = 'dpb_firstaccess_' . $post_id;

  if(get_field('use_countdown' , $post_id) && 'cookie' == get_field('countdown_mode' ,$post_id)){

    if (!isset($_COOKIE[$dpb_contdown_cookie_name])) {
      // クッキーがない場合は作成
      setcookie( $dpb_contdown_cookie_name, date_i18n( 'Y-m-d H:i:s' ), \time() + (365 * 24 * 60 * 60), COOKIEPATH, COOKIE_DOMAIN );
    } else if(isset($_GET['reset_cookie'])) {
      // リセット用のGETパラメーターがある場合はクッキーを削除
      setcookie( $dpb_contdown_cookie_name, '', \time() - (365 * 24 * 60 * 60), COOKIEPATH, COOKIE_DOMAIN );
      add_action( 'wp_head', 'dcp\lpb\delete_cookie_message' );
    }else{
      // クッキーがある場合は現在時刻と比較して、経過していたらリダイレクト
      $now = new \DateTime(date_i18n( 'Y-m-d H:i:s' ));
      $end = get_countdown_end_date_from_cookie($post_id);

      if($now > $end){
        $url = get_field( 'countdown_cookie_redirect', $post_id );
        if(!$url){
          $url = \home_url();
        }
        wp_redirect( $url ); exit;
      }
    }

  }
}

add_action( 'init', 'dcp\lpb\countdown_set_cookie' );


/**
 * カウントダウンの終了日時を返す
 */

function get_countdown_limit(){
  if ( 'cookie' == get_field( 'countdown_mode' ) ) {
    // 初回アクセスから時間指定の場合
    $end = get_countdown_end_date_from_cookie(get_the_ID());
    return $end->format('Y-m-d H:i:s');

  }else{
    // 終了日時指定の場合
    return the_field( 'countdown_limit' );
  }
}

/**
 * クッキーから計算したカウントダウン終了日時の日付オブジェクト
 */

function get_countdown_end_date_from_cookie($post_id){

  $cookie_name = 'dpb_firstaccess_' . $post_id;
  $now = new \DateTime(date_i18n( 'Y-m-d H:i:s' ));

  // クッキーから初回アクセス日時を取得
  if(!isset($_COOKIE[$cookie_name])){
    $first_access = $now;
  }else{
    $first_access = new \DateTime($_COOKIE[$cookie_name]);
  }

  // 終了日時を算出
  $limit = get_field( 'countdown_cookie_limit' ,$post_id );
  $end = $first_access->modify('+' . $limit . ' hours');

  return $end;

}

/**
 * カウントダウンの終了時のリダイレクト先URLを返す
 */

function get_countdown_redirect_url(){
  if ( 'cookie' == get_field( 'countdown_mode' ) ) {
    $url = the_field( 'countdown_cookie_redirect' );
    if(!$url){
      $url = \home_url();
    }
    return $url;

  }else{
    // 終了日時指定の場合
    return the_field( 'countdown_redirect' );
  }
}

function delete_cookie_message(){
  ?>
  <script>
    alert('カウントダウン用のCookieをリセットしました。');
    location.href = "<?php echo esc_url(get_permalink(get_the_ID())) ?>";
  </script>
  <?php
}
