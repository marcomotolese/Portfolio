<?php

/**
 * Entry Vercel (serverless): prepara /tmp e delega a Laravel.
 */

// 1. Crea le directory necessarie in /tmp (unico path scrivibile su Vercel)
$dirs = [
    '/tmp/laravel/views',
    '/tmp/laravel/storage/logs',
    '/tmp/laravel/storage/framework/sessions',
    '/tmp/laravel/storage/framework/views',
    '/tmp/laravel/storage/framework/cache/data',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0775, true);
    }
}

// 2. Sovrascrivi le env per puntare storage su /tmp
$_ENV['APP_STORAGE']    = '/tmp/laravel/storage';
$_SERVER['APP_STORAGE'] = '/tmp/laravel/storage';

// 3. Bootstrap Laravel
require __DIR__.'/../public/index.php';