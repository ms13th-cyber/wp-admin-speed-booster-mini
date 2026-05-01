<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// 設定登録
add_action( 'admin_init', function() {

    register_setting( 'wasbm_settings', 'wasbm_options', [
        'sanitize_callback' => 'wasbm_sanitize_options'
    ]);

    add_settings_section(
        'wasbm_main',
        '高速化オプション',
        '__return_false',
        'wasbm'
    );

    $fields = [
        'disable_emoji'      => 'Emoji スクリプトを無効化',
        'disable_oembed'     => 'oEmbed を無効化',
        'stop_heartbeat'     => 'Heartbeat API を停止',
        'slow_heartbeat'     => 'Heartbeat API を60秒に延長',
        'disable_gutenberg'  => 'Gutenberg 関連スクリプトを無効化',
        'disable_migrate'    => 'jQuery Migrate を無効化（管理画面のみ）',
        'optimize_dashicons' => 'Dashicons を必要時のみ読み込み',
        'clean_post_columns' => '投稿一覧の重いカラムを非表示',
    ];

    foreach ( $fields as $key => $label ) {
        add_settings_field(
            $key,
            $label,
            function() use ( $key ) {
                $options = get_option( 'wasbm_options', [] );
                $checked = isset( $options[$key] ) ? 'checked' : '';
                echo "<input type='checkbox' name='wasbm_options[$key]' value='1' $checked>";
            },
            'wasbm',
            'wasbm_main'
        );
    }
});

// sanitize
function wasbm_sanitize_options( $input ) {
    $output = [];
    foreach ( $input as $key => $value ) {
        $output[$key] = $value === '1' ? 1 : 0;
    }
    return $output;
}

// 設定ページ追加
add_action( 'admin_menu', function() {
    add_options_page(
        'Admin Speed Booster Mini',
        'Admin Speed Booster Mini',
        'manage_options',
        'wasbm',
        function() {
            echo '<div class="wrap"><h1>Admin Speed Booster Mini</h1>';
            echo '<form method="post" action="options.php">';
            settings_fields( 'wasbm_settings' );
            do_settings_sections( 'wasbm' );
            submit_button();
            echo '<p style="margin-top:10px;color:#666;">※「Heartbeat 停止」と「60秒延長」はどちらか一方のみ有効になります。</p>';
            echo '</form></div>';
        }
    );
});
