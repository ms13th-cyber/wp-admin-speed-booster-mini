# WP Admin Speed Booster Mini

A lightweight, privacy‑friendly WordPress plugin that dramatically speeds up your admin dashboard by disabling unnecessary scripts, styles, and background processes. Unlike heavy optimization plugins, this tool focuses solely on the admin area and keeps your site frontend untouched.

[日本語の解説は英語の後にあります]

---

## Key Features

- **Disable Unnecessary Admin Scripts**: Removes emoji scripts, oEmbed scripts, Gutenberg block styles, jQuery Migrate, and other non‑essential assets from the admin area.
- **Heartbeat API Control**: Reduce server load by disabling Heartbeat entirely or extending its interval to 60 seconds.
- **Dashicons Optimization**: Prevents Dashicons from loading for non‑logged‑in users, reducing unnecessary frontend requests.
- **Cleaner Post List Screen**: Optionally hides heavy columns (e.g., comments, tags) to speed up the post list view.
- **Lightweight & Zero Ads**: No tracking, no external requests, no bloat. Pure performance improvement with minimal code.
- **Simple Toggle‑Based Settings**: All features can be enabled or disabled individually from a clean settings page.

## Installation

1. Upload the `wp-admin-speed-booster-mini` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin through the “Plugins” menu in WordPress.
3. Go to **Settings > Admin Speed Booster Mini** to enable or disable optimization options.

---

## 主な機能（日本語）

WordPress 管理画面を高速化するために、不要なスクリプト・スタイル・バックグラウンド処理を停止する軽量プラグインです。
フロント側には一切影響を与えず、管理画面だけを最適化します。

- **不要スクリプトの無効化**: Emoji、oEmbed、Gutenberg スタイル、jQuery Migrate などを管理画面から除去し、読み込みを軽量化します。
- **Heartbeat API の制御**: 完全停止または 60 秒間隔に変更することで、サーバー負荷を大幅に軽減します。
- **Dashicons の最適化**: 非ログインユーザーには Dashicons を読み込まないようにし、無駄なリクエストを削減します。
- **投稿一覧画面の軽量化**: コメント数・タグなどの重いカラムを非表示にして、一覧画面の表示速度を改善します。
- **軽量・広告ゼロ**: トラッキングなし、外部通信なし、設定はすべて ON/OFF のみ。極めてシンプルな構成です。
- **直感的な設定画面**: 管理画面の「設定 > Admin Speed Booster Mini」から、各機能を個別に切り替えられます。

## インストール

1. `wp-admin-speed-booster-mini` フォルダを `/wp-content/plugins/` にアップロードします。
2. 管理画面の「プラグイン」から有効化してください。
3. 「設定」 > 「Admin Speed Booster Mini」から、最適化したい項目を ON/OFF できます。
