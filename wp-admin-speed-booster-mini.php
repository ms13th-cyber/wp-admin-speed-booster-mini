<?php
/**
 * Plugin Name: WP Admin Speed Booster Mini
 * Description: 管理画面の不要なCSS/JS/Emoji/Heartbeatを停止して高速化する軽量プラグイン。
 * Version: 1.0.0
 * Tested up to: 6.9.4
 * Requires PHP: 8.3.23
 * Author: masato shibuya(Image-box Co., Ltd.)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'WASBM_PATH', plugin_dir_path( __FILE__ ) );

// helpers を最初に読み込む（重要）
require_once WASBM_PATH . 'includes/helpers.php';

// 設定ページ
require_once WASBM_PATH . 'includes/settings.php';

// 最適化処理
require_once WASBM_PATH . 'includes/optimizations.php';


require_once __DIR__ . '/plugin-update-checker/plugin-update-checker.php';

$updateChecker = \YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
    'https://github.com/ms13th-cyber/wp-admin-speed-booster-mini/',
    __FILE__,
    'wp-admin-speed-booster-mini'
);

$updateChecker->setBranch('main');