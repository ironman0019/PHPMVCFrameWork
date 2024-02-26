<?php


use App\controllers\AuthController;
use emadisavi\phpmvc\Application;
use App\controllers\SiteController;
use App\models\RegisterModal;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [

    'userClass' => RegisterModal::class,

    'db' => [

        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']

        ]
    ];


$app = new Application(__DIR__, $config);



$app->db->applyMigrations();