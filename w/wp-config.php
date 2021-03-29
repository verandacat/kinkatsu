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
define('DB_NAME', 'ds8_kinkatsu');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ds8_kinkatsu');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'asdfn2k3adFLJ');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z,.9[~4OaR%|>T&s&96z5Tq_Rjq7yM{HUKH1[r(`N~I^+(Y+l2X63|odF#k?;TNj');
define('SECURE_AUTH_KEY',  '=lPKd2!Y`A7iBU?i{0aGfWa:NY_H6_A4Zu@m^bJ19*5.:mS}kcdw(e20DTKIZV6U');
define('LOGGED_IN_KEY',    '_ou6yQPN/hNK_Zb.H^:(|_7Wmse03vDfB<Ik*xgSD>um]1KeW_[buh:wbU WmE?+');
define('NONCE_KEY',        'DbwLKh|?1;|qK#ITzn9|Wq-R6CC<m_jbpPs,!/^Jf*JE?fy~nof;?x-`++tfx-@L');
define('AUTH_SALT',        'nNX5hV}15f[Un=A2>L18+%f|7h9KENw{Ugd|=,+R8X:F@hUN{.Q*F=H0$V(tCYP7');
define('SECURE_AUTH_SALT', 'C$+k}Vjs$zC~.-p^iPMl {BX4)j3@38vHS1<p]}ju|<;!?+hl6g<CMKT>]hk2rAB');
define('LOGGED_IN_SALT',   'twAVX|WLU3i$s-OIk8+2<` by+KK8-0G)lQ(I@/M7!R_;F.s)x^p({9btJt#=[g(');
define('NONCE_SALT',       '/~0lsDJSNYl?7*-lsQDUL+A+~6aq~-,=D.PdmV$aIed7c/KLLy<YSm9[RVM5L?#q');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
