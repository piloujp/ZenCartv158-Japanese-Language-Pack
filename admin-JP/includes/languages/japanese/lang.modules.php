<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE_MODULES_PAYMENT' => '支払いモジュールの設定',
    'HEADING_TITLE_MODULES_SHIPPING' => '配送モジュールの設定',
    'HEADING_TITLE_MODULES_ORDER_TOTAL' => '注文合計モジュールの設定',
    'TABLE_HEADING_ORDERS_STATUS' => '注文ステータス',
    'TEXT_MODULE_DIRECTORY' => 'モジュールディレクトリ:',
    'ERROR_MODULE_FILE_NOT_FOUND' => 'エラー：対応する言語ファイルが存在していないため、モジュールを読み込むことができませんでした：',
    'TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED' => '警告：オンラインストアの管理設定が変更されました。',
    'TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED' => 'このメールは、Zen Cartの管理画面にて設定変更を行った際に送られる自動送信メールです: ' . "\n\n" . '注意: 管理画面の [%s] モジュールの設定が、Zen Cartのadminユーザー %s によって変更されました。' . "\n\n" . 'もし、この変更に記憶がなかった場合は、すぐに設定を変更された方がいいでしょう。' . "\n\n" . 'この変更が周知のことであれば、このメールは無視しても構いません。',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED' => 'このメールは、Zen Cartの管理画面にて設定変更を行った際に送られる自動送信メールです: ' . "\n\n" . '注意: 管理画面の設定が変更されました。[%s] モジュールがZen Cartのadminユーザー %s によってインストールされました。' . "\n\n" . 'もし、この変更に記憶がなかった場合は、すぐに設定を変更された方がいいでしょう。' . "\n\n" . 'この変更が周知のことであれば、このメールは無視しても構いません。',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED' => 'このメールは、Zen Cartの管理画面にて設定変更を行った際に送られる自動送信メールです: ' . "\n\n" . '注意: 管理画面の設定が変更されました。 [%s] モジュールがZen Cartのadminユーザー %s によってアンインストールされました。' . "\n\n" . 'もし、この変更に記憶がなかった場合は、すぐに設定を変更された方がいいでしょう。' . "\n\n" . 'この変更が周知のことであれば、このメールは無視しても構いません。',
    'TEXT_DELETE_INTRO' => 'このモジュールをアンインストールしてもよろしいでしょうか？',
    'TEXT_WARNING_SSL_EDIT' => '警告：<a href="https://docs.zen-cart.com/user/installing/enable_ssl/"target="_blank">セキュリティ上の理由により、管理画面がSSL対応するまで、このモジュールに対する編集が無効になっています。</a>.',
    'TEXT_WARNING_SSL_INSTALL' => 'ALERT: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" target="_blank">セキュリティ上の理由により、管理画面がSSL対応するまで、このモジュールは無効になっています。',
    'TEXT_POSITIVE_INT' => '%s は、0 以上の整数値でなければなりません',
    'TEXT_POSITIVE_FLOAT' => '%s は、0以上の少数値でなければなりません',
];

return $define;
