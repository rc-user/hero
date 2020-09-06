<?php
/*
Plugin Name: Danganページビルダー
Plugin URI:  https://digitalcontent.tokyo
Description: ランディングページ作成専用WordPressプラグインです。
Version:     1.2.4
Author:      デジタルコンテンツ企画室
Author URI:  https://digitalcontent.tokyo
*/

require 'lib/plugin-update-checker/plugin-update-checker.php';
$dangan_update_checker = Puc_v4p3_Factory::buildUpdateChecker(
    'https://digitalcontent.tokyo/files/dangan-page-builder/info.json',
    __FILE__,
    'dangan-page-builder'
);

require_once('lib/define.php');
require_once('lib/util.php');
require_once('lib/helper.php');

require_once('lib/acf.php');
require_once('lib/cpt.php');

require_once('lib/init.php');
require_once('lib/template.php');
require_once('lib/shortcode.php');
require_once('lib/countdown.php');
