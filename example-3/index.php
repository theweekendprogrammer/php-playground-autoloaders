<?php

// This example shows how you can register multiple autoloaders

// Register an autoloader that just logs the class we are looking for
spl_autoload_register(function ($class) {
    echo "* Doing nothing to find {$class}.\n";
});

set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/src');
spl_autoload_register(function ($class) {
    spl_autoload($class);
});

$user = new User;
$role = new TheWeekendProgrammer\Role;
