<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 設定が有効かどうかを判定
 */
function wasbm_enabled( $key ) {
    $options = get_option( 'wasbm_options', [] );
    return ! empty( $options[$key] );
}

/**
 * 管理画面かどうか
 */
function wasbm_is_admin() {
    return is_admin();
}
