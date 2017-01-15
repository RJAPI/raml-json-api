<?php
// Here you can initialize variables that will be available to your tests
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../bootstrap/app.php';
spl_autoload_register(
    function ($class) {
        require_once str_replace('\\', '/', str_replace('App\\', '', $class)) . '.php';
    }
);