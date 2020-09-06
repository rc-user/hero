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
define( 'DB_NAME', 'rabbitc_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'rabbitc_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'w6zbpijtdi' );

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
define( 'AUTH_KEY',         'FB0bJS(iFj*yd~v,j)&Y2d]_%tffuL@xjdy>`%zWw5>~rLt>S5(52f~DXGsA~v|4' );
define( 'SECURE_AUTH_KEY',  'xibHMaIwZ9Ru)0_q5rX:+ih<EZiD~L{Th[y[H/j)?`Vz,~f%arM-14s7h*6dMTQ|' );
define( 'LOGGED_IN_KEY',    ']6qA7S3t-Xgl&:avtFN(U]*SLz$zn5rrr9` Yn[M-YtSsk{}Rmz##Ki99J7S v*&' );
define( 'NONCE_KEY',        'zB|,2{<.:gl JdQy7Uk_LBt$%m_1QMJ7M+/L2DxT2td=Ycq{R{y)jY2N1vXz$BH]' );
define( 'AUTH_SALT',        'O Hj^Co-w?9&~C .t!lc>]_^9`o`T Km&I3$k{vY)bjpFJy?t6;8s-X~oOhbNfR$' );
define( 'SECURE_AUTH_SALT', '+WJ>HTo/Ab*DQz<IdZ/.HfqG2 [Z^wOT)f~r(g$K]*NO%596k(Sc?!T +93-vkXM' );
define( 'LOGGED_IN_SALT',   'vB%|dQO.z0_B9z*Ayrci&%0yg0wP~ 5n*yr0^TdtX,tXEbTr2p7_ l,a-3ut{|$A' );
define( 'NONCE_SALT',       '&h4S2fx1Aeam)nSF2~V[7Iy=NQ5e]U)ozw=K=0A.*,4U<)4z}PP+-DHr;+8PG&vk' );
define( 'WP_CACHE_KEY_SALT', '~E=}$?!b}PgP%m1CqOaGBZH_&bP=dRu1A&:e[Vp`;ph>|{D0;%JKaJ>pMm<h#jZH' );
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
