<?php

use Illuminate\Http\Request;
// エントリポイント：Laravelアプリケーションの起点
// ①オートローダーの読み込み
define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}
// ①オートローダーの読み込み
// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// ②フレームワークの起動
// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
