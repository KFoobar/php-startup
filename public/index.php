<?php

// Loads composer packages
require __DIR__ . '/../vendor/autoload.php';

// Loads environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Enables error reporting
if (getenv('APP_DEBUG')) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// Loads application functions
require __DIR__.'/../bootstrap/functions.php';

// Boots the application
require __DIR__.'/../bootstrap/startup.php';
