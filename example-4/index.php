<?php

// Example shows registering your own autoloader to do something wild

spl_autoload_register(function ($class) {
    $file = __DIR__ . '/src/' . strtolower($class) . '.class.php';
    if (file_exists($file)) {
        require $file;
    }
});

$user = new User;
