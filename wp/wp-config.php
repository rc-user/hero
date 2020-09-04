<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'rabbitc_wp2' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'rabbitc_wp2' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '4mhng3b3h7' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8067.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L-m, {Mq}fgko@giM9-k{clc_U?r0F?,e2ODt2*yy}Va`c7J>=u izQaufG?)yCu' );
define( 'SECURE_AUTH_KEY',  '2F)Fz,=pIdHi [B]q,;S#/Q]=&C hHnd_a4,_TJbz%#b3wL+Y+M/^{{;7@)nI*~:' );
define( 'LOGGED_IN_KEY',    'EJ!+Yp2])HTk8tKv6]N<((vVJ zjPx<IE?N/jj{32xN~xXjvu8*}N[=)~uw<1Mk*' );
define( 'NONCE_KEY',        'sE[&-cBdUfWwlcy_R*:[KBqb=}Jklo*,0~zE$2 Mov++/gL.<k(tx1,JIUswJzA(' );
define( 'AUTH_SALT',        'BX!62aUoVnHQ-CPoI;`^DM]W-nu.i01)pQGuEa&o:6H=KV#FCZsHUz#fsE|W=5_*' );
define( 'SECURE_AUTH_SALT', 'NE[/0e/Qy0t}{LpcK{20hw.mj$u0JaAD7nC-ggfQKl/ReP&y8xldk*5;+wp=0#>D' );
define( 'LOGGED_IN_SALT',   'Vh%roMtc|T/r|u@UI9kt(LI+Rzg+4`^!eP]6Q,K`Y9U,[#6}+s*)LhMMypCW:dgz' );
define( 'NONCE_SALT',       '1~[`InnUA_JHI^~+Mn:u-!f^Z73l+:MH(Gc[gws_?5BWe4pfGX3Hz|]UIvkG=i=8' );
define( 'WP_CACHE_KEY_SALT', '1[.xuUwB1|&6_mzwm6Jm[T#ZmUn|sbGC.6Kw4uOVQbQ1LiBNFmHw&2qJrB*hd)q~' );
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
