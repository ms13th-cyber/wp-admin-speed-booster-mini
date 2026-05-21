=== WP Admin Speed Booster Mini ===
Contributors: masato shibuya(Image-box Co., Ltd.)
Tags: admin, speed, performance, optimization, dashboard
Requires at least: 5.0
Tested up to: 7.0.0
Requires PHP: 8.0
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

WordPress 管理画面の不要なスクリプト・スタイル・バックグラウンド処理を停止し、管理画面を高速化する軽量プラグインです。

== Description ==

このプラグインは、WordPress 管理画面で読み込まれる不要な CSS / JS / Emoji / Heartbeat API などを停止し、
管理画面の表示速度を大幅に改善することを目的とした「超軽量」最適化ツールです。

フロント側には一切影響を与えず、管理画面だけを対象にしているため、
テーマやプラグインとの競合リスクが極めて低く、安全に導入できます。

主な機能：
* Emoji スクリプトの無効化
* oEmbed 関連スクリプトの無効化
* Heartbeat API の停止または 60 秒間隔への延長
* Gutenberg ブロック関連スタイルの無効化
* jQuery Migrate の無効化
* Dashicons の最適化（非ログインユーザーには読み込まない）
* 投稿一覧画面の重いカラム（コメント数・タグ）の非表示
* すべて ON/OFF 可能なシンプル設定

== Installation ==

1. `wp-admin-speed-booster-mini` フォルダを `/wp-content/plugins/` にアップロードします。
2. WordPress の「プラグイン」メニューから有効化してください。
3. 「設定」 > 「Admin Speed Booster Mini」から、最適化したい項目を ON/OFF できます。

== Screenshots ==

1. 設定画面：各最適化項目をチェックボックスで個別に切り替え可能。

== Changelog ==

= 1.0.1 =
* Wordpress7.0.0での動作確認。

= 1.0 =
* 初回リリース。

== Frequently Asked Questions ==

= フロント側の表示に影響はありますか？ =
ありません。管理画面のみを対象に最適化しています。

= どの項目を ON にすればよいですか？ =
基本的にはすべて ON にして問題ありませんが、環境によっては Heartbeat 停止が影響する場合があります。
その場合は「60 秒に延長」を選択してください。

= 他のキャッシュ系プラグインと併用できますか？ =
はい。管理画面のみを最適化するため、キャッシュプラグインとの競合はほぼありません。
