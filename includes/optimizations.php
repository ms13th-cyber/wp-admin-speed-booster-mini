<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Emoji 無効化
 */
if ( wasbm_enabled( 'disable_emoji' ) ) {
    add_action( 'init', function() {
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
    });
}

/**
 * oEmbed 無効化
 */
if ( wasbm_enabled( 'disable_oembed' ) ) {
    add_action( 'init', function() {
        remove_action( 'admin_init', 'wp_oembed_add_host_js' );
    });
}

/**
 * Heartbeat 完全停止 or 60秒延長
 */
if ( wasbm_enabled( 'stop_heartbeat' ) ) {

    add_filter( 'heartbeat_send', '__return_false' );

} elseif ( wasbm_enabled( 'slow_heartbeat' ) ) {

    add_filter( 'heartbeat_settings', function( $settings ) {
        $settings['interval'] = 60;
        return $settings;
    });
}

/**
 * Gutenberg 関連無効化（管理画面のみ）
 */
if ( wasbm_enabled( 'disable_gutenberg' ) ) {
    add_action( 'admin_enqueue_scripts', function() {
        if ( ! is_admin() ) return;
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
    });
}

/**
 * jQuery Migrate 無効化（管理画面のみ）
 */
if ( wasbm_enabled( 'disable_migrate' ) ) {
    if ( is_admin() ) {
        add_filter( 'wp_default_scripts', function( $scripts ) {
            if ( isset( $scripts->registered['jquery'] ) ) {
                $scripts->registered['jquery']->deps =
                    array_diff( $scripts->registered['jquery']->deps, ['jquery-migrate'] );
            }
        });
    }
}

/**
 * Dashicons 最適化（フロントのみ）
 */
if ( wasbm_enabled( 'optimize_dashicons' ) ) {
    add_action( 'wp_enqueue_scripts', function() {
        if ( ! is_user_logged_in() && ! is_admin() ) {
            wp_dequeue_style( 'dashicons' );
        }
    });
}

/**
 * 投稿一覧の重いカラム削除（post / page）
 */
if ( wasbm_enabled( 'clean_post_columns' ) ) {

    function wasbm_clean_columns( $columns ) {
        unset( $columns['comments'], $columns['tags'] );
        return $columns;
    }

    add_filter( 'manage_edit-post_columns', 'wasbm_clean_columns' );
    add_filter( 'manage_edit-page_columns', 'wasbm_clean_columns' );
}
